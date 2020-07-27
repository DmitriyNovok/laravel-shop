<?php

namespace App\Http\Controllers\Basket;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController
{
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

        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($product_id);
        }

        $product = Product::find($product_id);
        session()->flash('success', 'Добавлен товар ' . $product->name);

        return redirect()->route('basket');
    }

    public function remove($product_id)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            return redirect()->route('basket');
        }
        $order = Order::find($order_id);

        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($product_id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        $product = Product::find($product_id);
        session()->flash('warning', 'Удален из корзины товар ' . $product->name);

        return redirect()->route('basket');
    }

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
        $order_id = session('order_id');
        if (is_null($order_id)) {
            redirect()->route('home');
        }
        $order = Order::find($order_id);

        return view('order', [
            'order' => $order
        ]);
    }

    public function confirmation(Request $request)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            redirect()->route('home');
        }
        $order = Order::find($order_id);
        $success = $order->saveOrder($request->name, $request->phone);

        if ($success) {
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else {
            session()->flash('warning', 'Ошибка!');
        }

        return redirect()->route('home');
    }
}