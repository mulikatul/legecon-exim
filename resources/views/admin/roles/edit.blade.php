@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="settings"></i>
@endsection
@section('content-header')
Role
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
                        <form id="quickForm" action="{{route('admin.roles.update',$role->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Role Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="Enter role name" value="{{old('name',$role->name)}}" readonly>
                                    @error('name')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-sm-2 col-form-label">Permissions</label>
                                <!-- <div class="col-sm-10">
                                    <div class="border-checkbox-section">
                                        @foreach($permissions as $permission)
                                            <div class="border-checkbox-group border-checkbox-group-primary">
                                                <input 
                                                    class="border-checkbox" 
                                                    type="checkbox" 
                                                    name="permissions[]" 
                                                    value="{{$permission->id}}" 
                                                    id="checkbox{{$permission->id}}" 
                                                    @if(count($role->permissions->where('id',$permission->id))) checked @endif 
                                                    @if($role->name == 'superadmin' && ($permission->name == 'Admin Users' || $permission->name == 'Roles' || $permission->name == 'Permissions')) onclick="return false;"  @endif
                                                />
                                                <label class="form-label border-checkbox-label" for="checkbox{{$permission->id}}">{{$permission->name}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> -->
                            </div>
                            <div class="row mb-3">
                                @foreach($groupedPermissions as $module => $permissions)
                                <div class="col-sm-3">
                                    {{ ucwords(str_replace('_', ' ', $module)) }}
                                    <div class="col-sm-3 mb-3">
                                        <div class="border-checkbox-section">
                                            @foreach($permissions as $permission)
                                                <div class="border-checkbox-group border-checkbox-group-primary">
                                                    <input class="border-checkbox" type="checkbox" type="checkbox" name="permissions[]" value="{{$permission->id}}"  id="checkbox{{$permission->id}}"  
                                                    @if(count($role->permissions->where('id',$permission->id))) checked @endif
                                                    @if($role->name == 'superadmin' && ($module == 'admin_users' || $module == 'roles' || $module == 'permissions')) onclick="return false;"  @endif
                                                    >
                                                    <label class="form-label border-checkbox-label" for="checkbox{{$permission->id}}">{{ ucfirst(explode('.', $permission->name)[1]) }}</label>
                                                </div>                                  
                                            @endforeach
                                        </div>
                                    </div>
                                </div>                                
                                @endforeach
                            </div>
                            <div class="button-page row d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark mr-2">Submit</button>
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
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