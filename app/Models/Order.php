<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
