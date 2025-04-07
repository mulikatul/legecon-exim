@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="shopping-bag"></i>
@endsection
@section('content-header')
Category
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
                        <form id="quickForm" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="category_name" class="form-control" placeholder="Enter category name">
                                    @error('category_name')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-warning">Back</a>
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