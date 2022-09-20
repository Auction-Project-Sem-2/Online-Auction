<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categories = ProductCategory::all();
        $featuredProduct = Product::where('featured',true)->limit(9)->get();
        $products  = Product::limit(20)->get();
        $blogs = Blog::limit(3)->get();
        return view('front.index',compact('categories','featuredProduct','products','blogs'));
    }
}
