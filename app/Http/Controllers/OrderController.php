<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function sendmail(Request $request) {

        Order::create($request->all());
        $order = [];
        $order['title'] = $request->input('title');
        $order['qtu'] = $request->input('qtu');
        $order['item_price'] = $request->input('item_price');
        $order['price'] = $request->input('price');

        return redirect()->route('main.page');
    }
}
