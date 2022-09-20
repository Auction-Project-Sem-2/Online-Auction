<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(Request $request) {
//        $products = Product::paginate(12);
        $sortBy = $request->sort_by ?? 'all';
        $search = $request->search ?? '';

        $products = Product::where('name','like','%' . $search . '%');

        switch($sortBy) {
            case 'high_to_low' :
                $products = $products->orderByDesc('price');
                break;
            case 'low_to_high' :
                $products = $products->orderBy('price');
                break;
        }
        $products = $products->paginate(12);
        return view('front.shop.shop',compact('products'));
    }
}
