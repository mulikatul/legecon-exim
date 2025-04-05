@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="settings"></i>
@endsection
@section('content-header')
CMS Users
@endsection
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @can('admin_users.create')
                        <div class="card-header listing-card-header button-page">
                            <a class="btn btn-dark" href="{{route('admin.cms-users.create')}}">+ Add New</a>
                        </div>
                    @endcan

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Role</th>
                                    <th>Registered On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userLists as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        @foreach($row->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>
                                    <td>{{formatted_date($row->created_at)}}</td>
                                    <td>{{ $row->status ? 'Active' : 'Not Active' }}</td>
                                    <td class="button-page">
                                        @can('admin_users.edit')
                                        <a class="btn  btn-primary" href="{{ route('admin.cms-users.edit',$row->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        @endcan
                                        @can('admin_users.delete')
                                        @if(!$row->hasRole('superadmin'))
                                            <a class="btn btn-danger delete-record delete-row" href="{{ route('admin.cms-users.destroy',$row->id) }}" data-id="{{$row->id}}">
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                            <form id="delete-form-{{$row->id}}" method="post" action="{{ route('admin.cms-users.destroy',$row->id) }}" display="none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endif
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th>#</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Role</th>
                                <th>Registered On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>

                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@section('script')

@endsection