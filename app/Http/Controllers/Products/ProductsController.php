<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class ProductsController extends Controller
{
    public function viewCategories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function viewCategory($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function viewProduct($product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
