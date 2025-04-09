@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="shopping-bag"></i>
@endsection
@section('content-header')
Product
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
                        <form id="quickForm" action="{{route('admin.products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select id="categoryId" name="category_id" class="form-control">
                                        @foreach($categories as $row)
                                            <option value="{{$row->id}}" @if($product->category_id == $row->id) selected @endif>{{$row->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <select id="subCategoryId" name="sub_category_id" class="form-control">
                                        @foreach($subCategories as $row)
                                            <option value="{{$row->id}}" @if($product->sub_category_id == $row->id) selected @endif>{{$row->sub_category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('sub_category_id')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{old('title',$product->title)}}">
                                    @error('title')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug" value="{{old('slug',$product->slug)}}">
                                    @error('slug')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Meta Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter meta title" value="{{old('meta_title',$product->meta_title)}}">
                                    @error('meta_title')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="meta_description" class="form-control" id="meta_description" placeholder="Enter meta description">{{old('meta_description',$product->meta_description)}}</textarea>
                                    @error('meta_description')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" name="price" class="form-control" id="buy_link" placeholder="Enter price" value="{{old('price',$product->price)}}">
                                    @error('price')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Buy Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="buy_link" class="form-control" id="buy_link" placeholder="Enter buy link" value="{{old('buy_link',$product->buy_link)}}">
                                    @error('buy_link')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="editor1" >{{old('description',$product->description)}}</textarea>
                                    @error('description')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" value="1" @checked($product->status)>
                                        <label class="custom-control-label" for="customSwitch3">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.products.index') }}" class="btn btn-warning">Back</a>
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
<script src="{{asset('admin/js/create-slug.js')}}"></script>
<script>
    $(document).on('change', '#categoryId', function() {
        var categoryId = $(this).val();
        if (categoryId) {
            $.ajax({
                url: `{{ route('admin.get-sub-category') }}`,
                data: { 'category_id': categoryId },
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    populateDropdown('#subCategoryId', data.subCategories);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        } else {
            $('#subCategoryId').empty();
            $('#subCategoryId').append('<option value="">--Select Sub Category--</option>');
        }
    });
    function populateDropdown(dropdownId, options) {
        var dropdown = $(dropdownId);
        dropdown.empty();
        dropdown.append('<option value="">--Select Sub Category--</option>');
        $.each(options, function(key, value) {
            dropdown.append($('<option></option>').attr('value', value['id']).text(value['sub_category_name']));
        });
    }
</script>
@endsection