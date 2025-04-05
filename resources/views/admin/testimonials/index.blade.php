@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="message-square"></i>
@endsection
@section('content-header')
Testimonials
@endsection
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header listing-card-header button-page">
                        <a class="btn btn-dark" href="{{route('admin.testimonials.create')}}">+ Add New</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <small>
                                <font color="red"><b>Note : Drag and drop a row to change the order / position.</b></font>
                            </small>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Client Name</th>
                                    <!-- <th>Image</th> -->
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($testimonials as $row)
                                    <tr class="row1" data-id="{{ $row->id }}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->client_name}}</td>
                                        <!-- <td><a href="{{asset($row->image)}}" target="__blank"><img src="{{media_file($row->image)}}" alt="testimonial image" height="50px" width="50px"></a></td> -->
                                        <td>{{$row->position}}</td>
                                        <td>
                                            {{ $row->status ? 'Active' : 'Not Active' }}
                                        </td>
                                        <td>
                                            <a class="btn  btn-primary" href="{{ route('admin.testimonials.edit',$row->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                            <a class="btn btn-danger delete-record delete-row" href="{{ route('admin.testimonials.destroy',$row->id) }}" data-id="{{$row->id}}">
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                            <form id="delete-form-{{$row->id}}" method="post" action="{{ route('admin.testimonials.destroy',$row->id) }}" display="none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>    
                                @endforeach   
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Client Name</th>
                                <!-- <th>Image</th> -->
                                <th>Position</th>
                                <th>Status</th>
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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


<script type="text/javascript">
  $(function () {
    $("#example2").DataTable();

    $( "#tablecontents" ).sortable({
      items: "tr",
      cursor: 'move',
      opacity: 0.6,
      update: function() {
          sendOrderToServer();
      }
    });

    function sendOrderToServer() {

      var eventData={!! $testimonials->toJson() !!};
      var countElements = eventData.length;        
      var order = [];
      $('tr.row1').each(function(index,element) {
          order.push({
          id: $(this).attr('data-id'),
          position:  countElements-index
        });
      });

      $.ajax({
        type: "POST", 
        dataType: "json", 
        url: "{{ url('admin/testimonials/update-order') }}",
        data: {
          order:order,
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
@endsection