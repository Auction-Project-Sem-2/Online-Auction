<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    function index() {
        $total = Cart::priceTotal();
        return view('front.checkout.checkout',compact('total'));
    }

    function addOrder(Request $request) {
        // Thêm đơn hàng
        $order = Order::create($request->all());

        // Thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'total' => $cart->price ,
            ];
            OrderDetail::create($data);
        }

        // Gửi mail
//        $total = Cart::priceTotal();
//        $subtotal = Cart::priceTotal();
//
//        $this->sendEmail($order, $total, $subtotal);


        // Xóa giỏ hàng
        Cart::destroy();

        return redirect('checkout/complete')->with('notification','Success! You will pay on delivery. Please check your email');
    }

    function complete() {
        $noti = session('notification');
        return view('front.checkout.completed',compact('noti'));
    }

    private function sendEmail($order, $total, $subtotal) {
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order','total','subtotal'),
            function ($message) use ($email_to){
                $message->from('AutionOnline@gmail.com', 'Auction');
                $message->to($email_to,$email_to);
                $message->subject('Order Notification');
            }
        );
    }
}
