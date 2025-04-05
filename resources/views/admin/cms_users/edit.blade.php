@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="settings"></i>
@endsection
@section('content-header')
CMS User
@endsection
@section('head-section')

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
                        <form id="quickForm" action="{{route('admin.cms-users.update',$cmsUser->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{old('name',$cmsUser->name)}}">
                                    @error('name')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{old('email',$cmsUser->email)}}" readonly>
                                    @error('email')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select name="role" class="form-control">
                                        @foreach($roles as $row)
                                            <option value="{{$row->id}}" @if(count($cmsUser['roles'])) @if($row->id == $cmsUser['roles'][0]['id']) selected @endif @endif>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" value="{{old('password')}}">
                                    <br/><small><font style="color: #808080;">Password requirements: Minimum of 8 characters, including at least 1 lowercase letter, 1 uppercase letter, 1 number, and 1 special character.</font></small>
                                    @error('password')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter password confirmation" value="{{old('password_confirmation')}}">
                                    @error('password_confirmation')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1" @checked($cmsUser->status)>
                                        <label class="custom-control-label" for="customSwitch3">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.cms-users.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                        {!! $userValidator->selector('#quickForm') !!}
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

@endsection