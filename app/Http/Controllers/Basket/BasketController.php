<?php

namespace App\Http\Controllers\Basket;

use App\Order;

class BasketController
{
    public function basket()
    {
        $order_id = session('order_id');
        if (! is_null($order_id)) {
            $order = Order::findOrFail($order_id);
        }
        return view('basket', [
            'order' => $order
        ]);
    }

    public function basketPlace()
    {
        return view('order');
    }

    public function add($product_id)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create()->id;
            session([
                'order_id' => $order
            ]);
        } else {
            $order = Order::find($order_id);
        }
        $order->products()->attach($product_id);

        return view('basket', [
            'order' => $order
        ]);
    }
}