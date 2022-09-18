<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categories = ProductCategory::all();
        return view('front.index',compact('categories'));
    }
}
