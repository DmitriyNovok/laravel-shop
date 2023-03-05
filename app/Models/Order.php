<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('count')
            ->withTimestamps();
    }

    public function totalOrderAmount()
    {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }

        return $sum;
    }

    public function saveOrder($name, $phone)
    {
        if ($this->status == 0) {
            $this->username = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('order_id');
            return true;
        } else {
            return false;
        }
    }
}