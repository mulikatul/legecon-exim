@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="layers"></i>
@endsection
@section('content-header')
Edit Gallery
@endsection

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->

                <div class="card">
                    <div class="card-header">
                        <h5>Edit</h5>
                    </div>
                    <div class="card-block">
                        <!-- <h4 class="sub-title">Basic Inputs</h4> -->
                        <form id="quickForm" action="{{route('admin.update-gallery')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$media->id}}">
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image_url" name="image_url" accept="image/png, image/gif, image/jpeg ,image/webp"> 
                                    @error('image_url')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                   <a href="{{asset($media->media_url)}}" target="__blank"><img src="{{media_file($media->media_url)}}" alt="media image" width="50px" height="50px"></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Alt Text</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alt_text" class="form-control" id="alt_text" placeholder="Enter alt text" value="{{old('alt_text',$media->alt_text)}}">
                                    @error('alt_text')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.get-gallery',$media->mediable_id) }}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                        {!! $formValidator->selector('#quickForm') !!}
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('script')
<script>
    $('#image_url').change(function(e) {
        var file = $(this).val().replace(/.*(\/|\\)/, '');
        var fileName = file.split('.').shift();
        $('#alt_text').val(fileName);
    });
</script>

@endsection