<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['media', 'category', 'subcategory'])->latest();

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(10);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.product.product_listing', compact('products'))->render()
            ]);
        }

        return view('frontend.product.index', compact('products'));
    }

    public function productDetail($slug)
    {
        $product = Product::with(['media', 'category', 'subcategory'])->where('slug',$slug)->first();
        if($product){
            return view('frontend.product.product_detail',compact('product'));
        }
        return abort(404);

    }
}
