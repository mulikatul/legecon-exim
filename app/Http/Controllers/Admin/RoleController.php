<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleFormRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use JsValidator;
//use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class RoleController extends AdminBaseController //implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:roles.view', only: ['index']),
            new Middleware('permission:roles.edit', only: ['edit']),
            new Middleware('permission:roles.create', only: ['create']),
            // new Middleware('permission:roles.delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->latest()->get();        
        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roleValidator = JsValidator::formRequest(RoleFormRequest::class);
        $permissions = Permission::orderBy('name')->get();
        $groupedPermissions = Permission::all()->groupBy(function ($permission) {
            return explode('.', $permission->name)[0]; // Extract module name
        });
        
        return view('admin.roles.create',compact('permissions', 'roleValidator', 'groupedPermissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleFormRequest $request)
    {
        $this->storeRole(new Role(),$request);
        return $this->redirectToIndex('admin.roles', $this->constants->get('constants.message.save'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try 
        {
            $roleValidator = JsValidator::formRequest(RoleFormRequest::class);
            $permissions = Permission::orderBy('name')->get();
            $role  = Role::with('permissions')->findorFail($id);
            $groupedPermissions = Permission::all()->groupBy(function ($permission) {
                return explode('.', $permission->name)[0]; // Extract module name
            });
            return view('admin.roles.edit',compact('roleValidator', 'role', 'permissions', 'groupedPermissions'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.roles', 'Role not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleFormRequest $request, string $id)
    {
        try 
        {
            $role = Role::findorFail($id);
            $this->storeRole( $role ,$request);
            return $this->redirectToIndex('admin.roles', $this->constants->get('constants.message.update'));
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.roles', 'Role not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function storeRole($role,$data)
    {
        // dd($data->permissions);
        $role->name = $data->name;
        $role->save();
        if($data->permissions){
            //used because of this error: There is no permission named `1` for guard `admin`.
            $role->syncPermissions(array_map('intval',$data->permissions));
        }else{
            $role->syncPermissions($data->permissions);
        }
        
        return;
    }
}
