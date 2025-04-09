<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryEditFormRequest;
use App\Http\Requests\Admin\ProductFormRequest;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use JsValidator;
use Validator;
class ProductController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category','subCategory'])->latest()->get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formValidator = JsValidator::formRequest(ProductFormRequest::class);
        $categories = Category::latest()->get();
        return view('admin.product.create',compact('formValidator','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $this->storeProduct(new Product(), $request);              
        return $this->redirectToIndex('admin.products', $this->constants->get('constants.message.save'));
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
        $formValidator = JsValidator::formRequest(ProductFormRequest::class);
        $categories = Category::latest()->get();
        $product = Product::findOrFail($id);
        $subCategories = SubCategory::where('category_id',$product->category_id)->latest()->get();
        return view('admin.product.edit',compact('formValidator','product','categories','subCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $this->storeProduct($product, $request);              
        return $this->redirectToIndex('admin.products', $this->constants->get('constants.message.save'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id)->delete();            
        return $this->redirectToIndex('admin.products', $this->constants->get('constants.message.delete'));
    }

    public function storeProduct($product,$data)
    {
        $product->category_id  = $data->category_id;
        $product->sub_category_id  = $data->sub_category_id;
        $product->title  = $data->title;
        $product->slug  = $data->slug;
        $product->price  = $data->price;
        $product->buy_link  = $data->buy_link;
        $product->meta_title  = $data->meta_title;
        $product->meta_description  = $data->meta_description;
        $product->description  = $data->description;
        $product->status  = $data->status ? 1:0;
        $product->save();
        return;
    }

    public function getSubCategory(Request $request)
    {
        $categoryId = $request->category_id;
        try 
        {
            $subCategories = SubCategory::where('category_id',$categoryId)->get();
            return response()->json(['subCategories' => $subCategories]);
        } 
        catch (\Exception $e) 
        {            
            return response()->json([
                'status' => 500,
                'success' => false,
                'message' => $e->getMessage(),
                'data' => []
            ]);
        }
    }

    public function getGallery($id)
    {
        $galleries = Product::with(['media' => function ($query) {
            $query->position('desc');
        }])->findorFail($id);
        // dd($galleries);
        return view('admin.product.get_gallery',compact('galleries'));
    }

    public function storeGallery(Request $request)
    {
       
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'file' => 
            [
                 'required',
                 'mimes:jpg,png,jpeg,gif,webp',
                 'max:2048',
                
            ]
         ],[
         'file.max' => 'Maximum upload file size:2 mb.',
       ]);

       if ($validator->fails()) {
           $status = 400;
           $data['success'] = 0;
           $data['error'] = $validator->errors()->first('file');// Error response

       }else{
            if($request->file('file')) {
                // dd();
                 $name = $this->mediaService->uploadAndCompress($request->file('file'), config('constants.uploads.product').'/'.$request->product_id);
                 $product = $this->saveMedia($name,$request->product_id);
                 $data['name'] = $name;
                 $data['id'] = $product->id;
                 $data['success'] = 1;
                 $data['message'] = 'Uploaded Successfully!';
                 $status = 200;

            }else{
                  // Response
                  $data['success'] = 0;
                  $data['message'] = 'File not uploaded.'; 
                  $status = 400;
            }
       }

        return response()->json($data,$status);
    }
    public function removeFile(Request $request)
    {
        // dd($request->all());
        $media = Media::where('mediable_id',$request->productId)->where('media_url', $request->fileName)->where('mediable_type','App\Models\Product')->first();
        
        if($media){
            $this->mediaService->deleteFile($request->fileName);
            $media->delete();
        }
        return response()->json('file removed successfully',200);
       
    }
    public function saveMedia($fileName,$productId)
    {
        // dd($fileName);
        $position = Media::where('mediable_id',$productId)->max('position');
        $position = $position+1;
        $altText = pathinfo($fileName, PATHINFO_FILENAME);
        $product = Product::findorFail($productId);
        $product->media()->create([
            'media_type' => 'image',
            'media_url' => $fileName,
            'alt_text' => $altText,
            'position' => $position
        ]);
        return $product;
    }

    public function updateGalleryOrder(Request $request)
    {
        // dd($request->all());
        foreach ($request->order as $row) {
            Media::whereId($row['id'])->update([
                'position' => $row['position']
            ]);
        }

        return $this->responseToJson('order updated successfully');
    }

    public function mediaEdit($id){
        $formValidator = JsValidator::formRequest(GalleryEditFormRequest::class);
        $media = Media::findOrFail($id);   
        return view('admin.product.product_gallery_edit',compact('media','formValidator'));
    }

    public function mediaUpdate(GalleryEditFormRequest $request)
    {
        $media = Media::findOrFail($request->id);   
        if ($request->hasFile('image_url')){
            if($media->image_url){
                $this->mediaService->deleteFile($media->image_url);
            }         
            $media->media_url = $this->mediaService->uploadAndCompress($request->file('image_url'), config('constants.uploadsDO.fleet').'/'.$media->mediable_id);
        } 
        $media->alt_text = $request->alt_text;
        $media->save();
        return redirect(route('admin.get-gallery', $media->mediable_id))->with('message','Record updated successfully');

    }

    public function deleteGallery(Request $request)
    {
        $media = Media::findOrFail($request->id);
        $this->mediaService->deleteFile($media->media_url);
        $media->delete();
        return redirect()->back()->with('message','File deleted successfully');
    }
}
