<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NumberFormRequest;
use App\Models\Number;
use Illuminate\Http\Request;
use JsValidator;

class NumberController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numbers = Number::get();
        return view('admin.number.index',compact('numbers'));
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
        try 
        {
            $numberValidator = JsValidator::formRequest(NumberFormRequest::class);
            $number = Number::findorFail($id);
            return view('admin.number.edit',compact('numberValidator','number'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.numbers', 'Record not found.');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NumberFormRequest $request, string $id)
    {
        try 
        {
            $number = Number::findorFail($id);
            $number->name = $request->name;
            $number->number = $request->number;
            $number->save();
            return $this->redirectToIndex('admin.numbers', $this->constants->get('constants.message.update'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.numbers', 'Record not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
