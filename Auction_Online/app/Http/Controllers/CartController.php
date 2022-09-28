<?php

namespace App\Http\Controllers;

use App\Models\HistoryAuction;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


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
            $productAuction = HistoryAuction::join('products','products.id','=','history_auctions.product_id')
//                ->join('users','users.id','=','history_auctions.user_id')
                ->where('history_auctions.user_id',Auth::user()->id)
                ->select('products.*')
                ->distinct()->get();

            $vs = HistoryAuction::where('product_id',49)->where('user_id',Auth::id())->max('price');

            $prices = [];
            $images = [];
            $auctionNumber = [];
            $carts = Cart::content();
            for($i = 0; $i < count($productAuction); $i++) {

                $p = Product::find($productAuction[$i]->id);

                $prices[] = $p->historyAuctions[count($p->historyAuctions) - 1]->price;
                $images[] = $p->productImages[0]->path;
                $auctionNumber[] = count($p->historyAuctions);


                // Xử lý khi đấu giá hết thời gian add product vào cart
//                $endTime = getdate(strtotime($productAuction[$i]->end_time))[0];
//                $nowTime = time();
//                if ($endTime < $nowTime){
//                    $this->add($productAuction[$i]->id);
//                    foreach ($carts as $cart) {
//                        if ($cart->id == $productAuction[$i]->id) {
//                            $this->add($productAuction[$i]->id);
//                        }
//                    }
//                }


            }



            return view('front.cart.cart',compact('carts','total','productAuction','prices','images','auctionNumber'));
        }

        return view('front.cart.cart',compact('carts','total'));
    }

    function add($id) {
        $product = Product::findOrFail($id);

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price ?? $product->historyAutions[count($product->historyAutions)-1]->price,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->productImages,
            ],
        ]);
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
