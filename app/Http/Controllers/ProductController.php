<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::getAllProducts();
        return view('product.index', ['products' => $products]);
    }
}
