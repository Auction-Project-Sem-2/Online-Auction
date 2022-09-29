<?php

namespace App\Http\Controllers;

use App\Models\HistoryAuction;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->search ?? '';

        $products = Product::where('name','like','%' . $search . '%')->where('user_id', Auth::user()->id);
        $products = $products->paginate(10);

        return view('front/client/seller/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('front/client/seller/create', compact('productCategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id ;
        $data['qty'] = 0; //khi tạo mới sản phẩm số lượng = 0
        $data['featured'] = true; //khi tạo mới sản phẩm số lượng = 0

        $product = Product::create($data);

        return redirect('client/seller/product/' . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $product = Product::find($id);


        return view('front/client/seller/show', compact('product'));
    }

    public function show_Auction($id, Request $request)
    {
        $search = $request->search ?? '';

        $product = Product::find($id);
        $productAuctions = $product->historyAuctions;
        $status = $product->historyAuctions->where('status', 1);
//        $productAuctions = $productAuctions->where('name','like','%' . $search . '%');

        return view('front/client/seller/auctionUsers', compact('product', 'productAuctions', 'status'));
    }

    public function show_profile($user_id) {
        $user = User::find($user_id);
        return view('front/client/seller/profile', compact('user'));
    }


    public function updateStatus($id, $auction_id, Request $request) {
        $data = $request->all();
        HistoryAuction::find($auction_id)->update($data);

        $email = HistoryAuction::find($auction_id);


        $this->sendEmail($email);

        return redirect('/client/seller/product/'. $id . '/auction');
    }

    private function sendEmail($email) {
        $email_to = $email->email;

        Mail::send('front.client.seller.email', compact('email'),
            function ($message) use ($email_to){
                $message->from('AutionOnline@gmail.com', 'Auction');
                $message->to($email_to,$email_to);
                $message->subject('Auction Notification');
            }
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $productCategories = ProductCategory::all();

        return view('front/client/seller/edit', compact('product', 'productCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        Product::find($id)->update($data);

        return redirect('client/seller/product/'. $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
