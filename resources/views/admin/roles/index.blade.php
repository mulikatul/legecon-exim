@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="settings"></i>
@endsection
@section('content-header')
Roles
@endsection
@section('main-content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          @can('roles.create')
          <div class="card-header listing-card-header button-page">
            <a class="btn btn-dark" href="{{route('admin.roles.create')}}">+ Add New</a>
          </div>
          @endcan
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Roles</th>
                  <th>Permissions</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($roles as $role)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$role->name}}</td>
                  <td>
                    @foreach($role->permissions as $permission)
                      <span class="badge" style="background-color:#7367f0;color:white">{{$permission->name}}</span>
                    @endforeach
                  </td>
                  <td class="card-header  button-page">
                    @can('roles.edit')
                    <a class="btn btn-primary" href="{{ route('admin.roles.edit',$role->id) }}">
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
                <th>Roles</th>
                <th>Permissions</th>
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