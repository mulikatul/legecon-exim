<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ContactUsController extends AdminBaseController //implements HasMiddleware
{
    // public static function middleware(): array
    // {
    //     return [
    //         new Middleware('permission:contact_us.view', only: ['index']),
    //         // new Middleware('permission:contact_us.edit', only: ['edit']),
    //         // new Middleware('permission:contact_us.create', only: ['create']),
    //         new Middleware('permission:contact_us.delete', only: ['destroy']),
    //     ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactUs = ContactUs::latest()->get();
        return view('admin.contact_us.index',compact('contactUs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try 
        {
            ContactUs::findorFail($id)->delete();
            return $this->redirectToIndex('admin.contact-us', $this->constants->get('constants.message.delete'));
        } 
        catch (\Exception $e) 
        {
            return $this->redirectToIndexError('admin.contact-us', 'An error occurred while deleting the contact us.');            
        }
    }
}
