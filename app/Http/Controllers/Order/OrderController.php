<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;

class OrderController extends Order
{
    public function order()
    {
        return view('order');
    }
}