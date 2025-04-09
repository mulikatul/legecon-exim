@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="shopping-bag"></i>
@endsection
@section('content-header')
Products
@endsection

@section('main-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header listing-card-header  button-page">
                        <a class="btn btn-dark" href="{{route('admin.products.create')}}">+ Add New</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Title</th>
                                    <th>Gallery</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{optional($row->category)->category_name}}</td>
                                    <td>{{optional($row->subCategory)->sub_category_name}}</td>
                                    <td>{{$row->title }}</td>
                                    <td><a href="{{route('admin.get-gallery',$row->id)}}">View Gallery</a></td>
                                    <td>{{$row->status ? 'Active':'Not Active'}}</td>
                                    <td class="button-page">

                                        <a class="btn btn-primary" href="{{ route('admin.products.edit',$row->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger delete-record delete-row" href="{{ route('admin.products.destroy',$row->id) }}" data-id="{{$row->id}}">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                        <form id="delete-form-{{$row->id}}" method="post" action="{{ route('admin.products.destroy',$row->id) }}" display="none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th>#</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Title</th>
                                <th>Gallery</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection

@section('script')

@endsection