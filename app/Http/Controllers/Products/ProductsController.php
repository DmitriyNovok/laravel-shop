<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ProductsController extends Controller
{
    public function viewCategories()
    {
        return view('categories', [
            'categories' => Category::get()
        ]);
    }

    public function viewCategory($code)
    {
        return view('category', [
            'category' => Category::where('code', $code)->first(),
        ]);
    }

    public function viewProduct($category, $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
