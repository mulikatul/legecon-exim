@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="shopping-bag"></i>
@endsection
@section('content-header')
Sub Categories
@endsection

@section('main-content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header listing-card-header  button-page">
            <a class="btn btn-dark" href="{{route('admin.sub-category.create')}}">+ Add New</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $row)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$row->category->category_name}}</td>
                  <td>{{$row->sub_category_name	}}</td>
                  <td>{{$row->status ? 'Active':'Not Active'}}</td>
                  <td class="button-page">
                   
                    <a class="btn btn-primary" href="{{ route('admin.sub-category.edit',$row->id) }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>
                    
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <th>#</th>
                <th>Category</th>
                <th>Name</th>
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