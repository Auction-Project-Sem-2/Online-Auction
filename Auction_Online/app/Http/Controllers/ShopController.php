<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(Request $request) {
        $productAll = Product::all();
        $sortBy = $request->sort_by ?? 'all';
        $search = $request->search ?? '';
        $categories = ProductCategory::all();



        $products = Product::where('name','like','%' . $search . '%');

        switch($sortBy) {
            case 'high_to_low' :
                $products = $products->orderByDesc('price');
                break;
            case 'low_to_high' :
                $products = $products->orderBy('price');
                break;
        }

        // Category
        $category = $request->cate ?? [];
        $category_ids = array_keys($category);
        $products = $category_ids != null ? $products->whereIn('product_category_id',$category_ids) : $products;

        // Price
        $priceMin = $request->minPrice;
        $priceMax = $request->maxPrice;
        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price',[$priceMin,$priceMax]) : $products;

        $products = $products->paginate(12);

        $products->appends(['sort_by' => $sortBy, 'minPrice' => $priceMin,'priceMax'=> $priceMax]);

        return view('front.shop.shop',compact('products','productAll','categories'));
    }


    function show($id) {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('product_category_id',$product->product_category_id)->limit(5)->get();

        return view('front.shop.show',compact('product','relatedProducts'));
    }
}
