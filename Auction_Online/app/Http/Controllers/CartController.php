<?php

namespace App\Http\Controllers;

use App\Models\HistoryAuction;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    function add($id) {
        $product = Product::findOrFail($id);

        Cart::add([
           'id' => $product->id,
           'name' => $product->name,
           'qty' => 1,
           'price' => $product->price,
           'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->productImages,
            ],
        ]);
        return back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::priceTotal();
        if (Auth::check()) {
            $productID = HistoryAuction::join('products','products.id','=','history_auctions.product_id')
                ->join('users','users.id','=','history_auctions.user_id')
                ->where('history_auctions.user_id',Auth::user()->id)
                ->select('products.id')->distinct()->get();

            $product = Product::findOrFail(1)->historyAuctions;
        }

        return view('front.cart.cart',compact('carts','total','productID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy();

        return back();
    }

    public function delete($rowId) {
        Cart::remove($rowId);

        return back();
    }
}
