<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
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


Route::prefix('shop')->group(function () {
    Route::get('',[ShopController::class,'index']);
    Route::get('product/{id}',[ShopController::class,'show']);
    Route::post('product/{id}',[ShopController::class,'addAuction']);
});

Route::prefix('cart')->group(function () {
    Route::get('',[CartController::class,'index']);
    Route::get('/{id}',[CartController::class,'destroy']);
});

Route::prefix('client')->group(function() {
    Route::resource('seller/product', SellerController::class);
    Route::get('seller/product/{id}/auction', [SellerController::class, 'show_Auction']);
    Route::post('seller/product/{id}/auction/{auction_id}', [SellerController::class, 'updateStatus']);
    Route::get('user/profile/{user_id}', [SellerController::class, 'show_profile']);
    Route::resource('buyer/product', BuyerController::class);
    Route::resource('seller/product/{product_id}/image', ProductImageController::class);
    Route::resource('seller/product/{product_id}/detail', ProductDetailController::class);

});

Route::prefix('blog')->group(function () {
    Route::get('/',[BlogController::class,'index']);
    Route::get('/{id}/blog_detail',[BlogController::class,'show']);
    Route::post('/{id}/blog_detail',[BlogController::class,'addCmt']);
});

Route::get('about_us', [HomeController::class,'about_us']);
Route::get('help_center', [HomeController::class,'help_center']);


Route::prefix('checkout')->group(function () {
    Route::get('',[\App\Http\Controllers\CheckoutController::class,'index']);
    Route::post('',[\App\Http\Controllers\CheckoutController::class,'addOrder']);
    Route::get('complete',[\App\Http\Controllers\CheckoutController::class,'complete']);
});

Route::prefix('profile')->group(function () {
    Route::get('',[ProfileController::class,'index']);
    Route::get('edit',[ProfileController::class,'showEdit']);
    Route::put('edit',[ProfileController::class,'update']);
});

Route::prefix('account')->group(function () {
    Route::get('login',[\App\Http\Controllers\AccountController::class,'login']);
    Route::post('login',[\App\Http\Controllers\AccountController::class,'checkLogin']);
    Route::get('logout',[\App\Http\Controllers\AccountController::class,'logout']);
    Route::get('register',[\App\Http\Controllers\AccountController::class,'register']);
    Route::post('register',[\App\Http\Controllers\AccountController::class,'postRegister']);
});





// Dashboard (Admin)
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function () {
    Route::redirect('', 'admin/user');

    Route::get('home', [Admin\HomeController::class, 'index']);

    Route::resource('user', Admin\UserController::class);

    Route::resource('product', Admin\ProductController::class);
    Route::get('product/{id}/auctioneers', [Admin\ProductController::class, 'show_auctioneers']);
    Route::get('product/auctioneers/{user_id}', [Admin\ProductController::class, 'show_user']);
    Route::resource('product/{product_id}/image', Admin\ProductImageController::class);
    Route::resource('product/{product_id}/detail', Admin\ProductDetailController::class);

    Route::resource('category', Admin\ProductCategoryController::class);

    Route::prefix('order')->group(function() {
        Route::get('/', [Admin\OrderController::class, 'index']);
        Route::get('/{id}', [Admin\OrderController::class, 'show']);
    });

    Route::prefix('login')->group(function () {
        Route::get('', [Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('', [Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });

    Route::get('logout', [Admin\HomeController::class, 'logout']);

});
