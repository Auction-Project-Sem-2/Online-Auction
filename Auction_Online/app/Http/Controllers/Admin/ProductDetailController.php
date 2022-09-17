<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index() {
        return view('admin.product.detail.index');
    }

    public function create() {
        return view('admin.product.detail.create');
    }

    public function show() {
        return view('admin.product.detail.show');
    }

    public function edit() {
        return view('admin.product.detail.edit');
    }
}
