<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function checkout() {
        $cart = Session::get('cart');
        return view('front.checkout', compact('cart'));
    }

    public function checkoutForm(Request $request) {
        $cart = Session::get('cart');
        $order = Order::create([
            'cart' => serialize($cart),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'status' => 'default',
            'client_email' => $request->input('client_email'),
        ]);

        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'client_email' => $request->input('client_email'),
            'amount' => $cart->totalPrice * 100,
            'shop_id' => 4617,
            'currency' => 'USD',
            'description' => 'description',
            'order_id' => 1,
            'debug' => 1,
            'signature' => 'c1ee070b34d13574',
            'language' => 'ru'
        ];

        // Send a POST request to: http://www.foo.com/bar
        $response = Curl::to('https://megakassa.ru/merchant/')
            ->withData($data)
            ->post();
        Session::forget('cart');
        return redirect()->route('main.page');
    }

    public function success(Request $request) {
        return view('front.success');
    }
}
