<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'products' => Product::get()
        ]);
    }
}
