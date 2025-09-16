@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="image"></i>
@endsection
@section('content-header')
Client Logo
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
                        <form id="quickForm" action="{{route('admin.client-logo.update',$clientLogo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Client Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Enter client name" value="{{old('client_name',$clientLogo->client_name)}}">
                                    @error('client_name')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Logo Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="logo_image" name="logo_image" accept="image/png, image/gif, image/jpeg ,image/webp"> 
                                    @error('logo_image')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                   <a href="{{asset($clientLogo->logo_image)}}" target="__blank"><img src="{{media_file($clientLogo->logo_image)}}" alt="logo image" width="50px" height="50px"></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Alt Text</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alt_text" class="form-control" id="alt_text" placeholder="Enter alt text" value="{{old('alt_text',$clientLogo->alt_text)}}">
                                    @error('alt_text')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1" @checked(old('status', $clientLogo->status) == '1')>
                                        <label class="custom-control-label" for="customSwitch3">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.client-logo.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                        {!! $clientLogoValidator->selector('#quickForm') !!}
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
    $('#logo_image').change(function(e) {
        var file = $(this).val().replace(/.*(\/|\\)/, '');
        var fileName = file.split('.').shift();
        $('#alt_text').val(fileName);
    });
</script>

@endsection