@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="settings"></i>
@endsection
@section('content-header')
Permissions
@endsection

@section('main-content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          @can('permissions.create')
          <div class="card-header listing-card-header  button-page">
            <a class="btn btn-dark" href="{{route('admin.permissions.create')}}">+ Add New</a>
          </div>
          @endcan
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Permission Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($permissions as $permission)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$permission->name}}</td>
                  <td class="button-page">
                    @can('permissions.edit')
                    <a class="btn btn-primary" href="{{ route('admin.permissions.edit',$permission->id) }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>
                    @endcan
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <th>#</th>
                <th>Permision Name</th>
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