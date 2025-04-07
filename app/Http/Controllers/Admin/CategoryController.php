<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use JsValidator;

class CategoryController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formValidator = JsValidator::formRequest(CategoryFormRequest::class);
        return view('admin.category.create',compact('formValidator'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFormRequest $request)
    {
        // dd($request->all());
        $this->storeCategory(new Category(), $request);              
        return $this->redirectToIndex('admin.category', $this->constants->get('constants.message.save'));
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
        $formValidator = JsValidator::formRequest(CategoryFormRequest::class);
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category','formValidator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryFormRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $this->storeCategory( $category, $request);              
        return $this->redirectToIndex('admin.category', $this->constants->get('constants.message.save'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function storeCategory($category, $data)
    {
        $category->category_name = $data->category_name;
        $category->save();
        return;
    }
}
