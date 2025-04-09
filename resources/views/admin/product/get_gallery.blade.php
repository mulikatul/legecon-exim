@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="image"></i>
@endsection
@section('content-header')
Product Galleries
@endsection
@section('head-section')
<link rel="stylesheet" href="{{asset('admin/plugins/dropzone/min/dropzone.min.css')}}">
@endsection
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-between">
                        <div class="card-header">
                            <a class="btn btn-warning" href="{{route('admin.products.index')}}">Products</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="text-danger"><small>Note : Upload Image.</small></span>
                        <form action="{{route('admin.store-gallery')}}" method="post" class="dropzone needsclick" id="dropzone-multi" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$galleries->id}}">
                            <div class="dz-message needsclick">
                                Drop files here
                            </div>
                        </form>
                    </div>

                </div>
                <div class="card">
                    <div class="d-flex justify-content-between">
                        <div class="card-header">
                            <span class="text-danger"><small>Note : Drag and drop a row to change the order / position.</small></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($galleries->media as $row)
                                <tr class="row1" data-id="{{ $row->id }}">
                                    <td>{{$loop->iteration}}</td>
                                    <td><a href="{{asset($row->media_url)}}" target="__blank"><img src="{{media_file($row->media_url)}}" alt="image" height="50px" width="50px"></a></td>
                                    <td>
                                        {{$row->position}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.edit-gallery',$row->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger delete-record delete-row" href="{{ route('admin.delete-gallery') }}" data-id="{{$row->id}}">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                        <form id="delete-form-{{$row->id}}" method="post" action="{{ route('admin.delete-gallery') }}" display="none">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$row->id}}">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Image</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>

                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@section('script')
<!-- dropzonejs -->
<script src="{{asset('admin/plugins/dropzone/min/dropzone.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


<script type="text/javascript">
    $(function() {
        $("#example2").DataTable();

        $("#tablecontents").sortable({
            items: "tr",
            cursor: 'move',
            opacity: 0.6,
            update: function() {
                sendOrderToServer();
            }
        });

        function sendOrderToServer() {

            var eventData = {!!$galleries->media->toJson() !!};
            var countElements = eventData.length;
            var order = [];
            $('tr.row1').each(function(index, element) {
                order.push({
                    id: $(this).attr('data-id'),
                    position: countElements - index
                });
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ url('admin/product/update-order') }}",
                data: {
                    order: order,
                    _token: '{{csrf_token()}}'
                },
                success: function(response) {
                    alert(response.message);
                    location.reload();
                }
            });

        }
    });
</script>
<script type="text/javascript">
    (function() {
        
        //Dropzone Configuration
        var uploadedDocumentMap = {};
        var product_id = {!! $galleries->id !!};
        Dropzone.autoDiscover = false;
        const dropzoneMulti = new Dropzone('#dropzone-multi', {
            
            addRemoveLinks: true,
            //previewTemplate: previewTemplate,
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.webp,.pdf",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
              // console.log(response);
                uploadedDocumentMap[file.name] = response.name
            },
            init: function() {
            this.on("sending", function(file, xhr, formData){
              $("#back-button").addClass("disable-click");
            });
            this.on("queuecomplete", function ( ) {
              location.reload();
            });
          },
          removedfile: function (file) {
                file.previewElement.remove();
                var name = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name;
                } else {
                    name = uploadedDocumentMap[file.name];
                }
                $.ajax({
                    url: "{{ route('admin.remove-file') }}",
                    type: "POST",
                    data: {
                        'fileName': name,
                        'product_id' : product_id,
                        _token: '{{csrf_token()}}'
                    }
                });
            },
        });

    })();
    
</script>
@endsection