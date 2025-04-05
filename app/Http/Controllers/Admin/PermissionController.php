<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PermissionFormRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use JsValidator;
//use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PermissionController extends AdminBaseController //implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:permissions.view', only: ['index']),
            new Middleware('permission:permissions.edit', only: ['edit']),
            new Middleware('permission:permissions.create', only: ['create']),
            // new Middleware('permission:permissions.delete', only: ['destroy']),
        ];
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::latest()->get();
        return view('admin.permission.index',compact('permissions'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissionValidator = JsValidator::formRequest(PermissionFormRequest::class);
        return view('admin.permission.create',compact('permissionValidator'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionFormRequest $request)
    {
        $this->storePermission(new Permission(),$request);
        return $this->redirectToIndex('admin.permissions', $this->constants->get('constants.message.save'));
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
            $permissionValidator = JsValidator::formRequest(PermissionFormRequest::class);
            $permission  = Permission::findorFail($id);
            return view('admin.permission.edit',compact('permissionValidator','permission'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.permissions', 'Permission not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionFormRequest $request, string $id)
    {
        try 
        {
            $permission = Permission::findorFail($id);
            $this->storePermission( $permission ,$request);
            return $this->redirectToIndex('admin.permissions', $this->constants->get('constants.message.update'));
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.permissions', 'Permission not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function storePermission($permission, $data)
    {
        $permission->name = $data->name;
        $permission->save();
        return;
    }
}
