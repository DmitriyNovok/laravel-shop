<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getProducts()
    {
        return $this->hasMany(Product::class);
    }
}
