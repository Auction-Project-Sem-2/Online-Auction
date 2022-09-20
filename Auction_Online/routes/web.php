<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);






// Dashboard (Admin)
Route::prefix('admin')
//    ->middleware('CheckAdminLogin')
    ->group(function () {
//    Route::redirect('', 'admin/user');

    Route::get('home', [Admin\HomeController::class, 'index']);

    Route::resource('user', Admin\UserController::class);
    Route::resource('product', Admin\ProductController::class);
    Route::resource('product/{product_id}/image', Admin\ProductImageController::class);
    Route::resource('product/{product_id}/detail', Admin\ProductDetailController::class);
    Route::resource('category', Admin\ProductCategoryController::class);



//
//    Route::prefix('category')->group(function () {
//        Route::get('/', [Admin\CategoryController::class, 'index']);
//        Route::get('create', [Admin\CategoryController::class, 'create']);
//        Route::get('id/edit', [Admin\CategoryController::class, 'edit']);
//    });

    Route::prefix('order')->group(function() {
        Route::get('/', [Admin\OrderController::class, 'index']);
        Route::get('/id', [Admin\OrderController::class, 'show']);
    });

    Route::get('login', [Admin\HomeController::class, 'getLogin']);
});
