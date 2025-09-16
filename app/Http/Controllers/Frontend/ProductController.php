<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['media', 'category', 'subcategory'])
            ->whereHas('subcategory', function ($query) {
                $query->status(1);
            })
            ->status(1)
            ->latest();

        $categories = Category::orderBy('category_name')->get();

        // Search by title
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        
        $products = $query->paginate(10);
        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.product.product_listing', compact('products'))->render()
            ]);
        }

        return view('frontend.product.index', compact('products', 'categories'));
    }

    public function productDetail($slug)
    {
        $product = Product::with(['media', 'category', 'subcategory'])->where('slug', $slug)->first();
        if ($product) {
            return view('frontend.product.product_detail', compact('product'));
        }
        return abort(404);
    }
}
