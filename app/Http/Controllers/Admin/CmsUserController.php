<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CmsUserFormRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use JsValidator;
//use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class CmsUserController extends AdminBaseController //implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:admin_users.view', only: ['index']),
            new Middleware('permission:admin_users.edit', only: ['edit']),
            new Middleware('permission:admin_users.create', only: ['create']),
            new Middleware('permission:admin_users.delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLists = Admin::with('roles')->latest()->get();
        // dd($userLists);
        return view('admin.cms_users.index',compact('userLists'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userValidator = JsValidator::formRequest(CmsUserFormRequest::class);
        $roles = Role::get();
        return view('admin.cms_users.create',compact('userValidator','roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CmsUserFormRequest $request)
    {
        $this->storeCmsUser(new Admin(),$request );
        return $this->redirectToIndex('admin.cms-users', $this->constants->get('constants.message.save'));
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
            $userValidator = JsValidator::formRequest(CmsUserFormRequest::class);
            $roles = Role::get();
            $cmsUser  = Admin::with('roles')->findorFail($id);
            return view('admin.cms_users.edit',compact('userValidator','roles','cmsUser'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.cms-users', 'User not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CmsUserFormRequest $request, string $id)
    {
        try 
        {
            $cmsUser = Admin::findorFail($id);
            $this->storeCmsUser( $cmsUser ,$request );
            return $this->redirectToIndex('admin.cms-users', $this->constants->get('constants.message.update'));
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.cms-users', 'User not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try 
        {
            $cmsUser = Admin::findorFail($id)->delete();
            return $this->redirectToIndex('admin.cms-users', $this->constants->get('constants.message.delete'));
        } 
        catch (\Exception $e) 
        {
            return $this->redirectToIndexError('admin.cms-users', 'An error occurred while deleting the blog.');            
        }
    }

    public function storeCmsUser($cmsUser,$data)
    {
        $cmsUser->name     = $data->name;
        $cmsUser->email    = $data->email;
        if($data->password)
            $cmsUser->password = Hash::make($data->password);
        $cmsUser->status   = $data->status ? 1 : 0;
        $cmsUser->syncRoles(intval($data->role));
        $cmsUser->save();
        return;
    }
}
