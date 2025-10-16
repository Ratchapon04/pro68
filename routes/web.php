<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/products', function () {
    $items = Product::all();
    return view('products.index', compact('items'));
});
