<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategoryFormRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use JsValidator;

class SubCategoryController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = SubCategory::with('category')->latest()->get();
        return view('admin.sub_category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formValidator = JsValidator::formRequest(SubCategoryFormRequest::class);
        $categories = Category::latest()->get();
        return view('admin.sub_category.create',compact('formValidator','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryFormRequest $request)
    {
        // dd($request->all());
        $this->storeCategory(new SubCategory(), $request);              
        return $this->redirectToIndex('admin.sub-category', $this->constants->get('constants.message.save'));
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
        $formValidator = JsValidator::formRequest(SubCategoryFormRequest::class);
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::latest()->get();
        return view('admin.sub_category.edit',compact('subCategory','formValidator','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryFormRequest $request, string $id)
    {
        $category = SubCategory::findOrFail($id);
        $this->storeCategory( $category, $request);              
        return $this->redirectToIndex('admin.sub-category', $this->constants->get('constants.message.save'));
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
        $category->category_id  = $data->category_id;
        $category->sub_category_name  = $data->sub_category_name;
        $category->status  = $data->status ? 1:0;
        $category->save();
        return;
    }
}
