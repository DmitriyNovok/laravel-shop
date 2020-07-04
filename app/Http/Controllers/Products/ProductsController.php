<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function viewCategories()
    {
        return view('categories');
    }

    public function viewCategory($category)
    {
        return view('category', compact('category'));
    }

    public function viewProduct($product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
