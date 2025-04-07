@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="shopping-bag"></i>
@endsection
@section('content-header')
Sub Category
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
                        <h5>Create</h5>
                    </div>
                    <div class="card-block">
                        <!-- <h4 class="sub-title">Basic Inputs</h4> -->
                        <form id="quickForm" action="{{route('admin.sub-category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control">
                                        <option value="">--Select Category--</option>
                                        @foreach($categories as $row)
                                            <option value="{{$row->id}}">{{$row->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_category_name" class="form-control" placeholder="Enter sub category name">
                                    @error('sub_category_name')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1" >
                                        <label class="custom-control-label" for="customSwitch3">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.sub-category.index') }}" class="btn btn-warning">Back</a>
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

@endsection