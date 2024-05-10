<?php

use Illuminate\Support\Facades\Route;
use App\Models\ProductsDetail;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us  ', function () {
    return view('about-us');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});



Route::get('/shop', function () {
    return view('shop', ['products' => ProductsDetail::all()]);
});

Route::get('/product/{id}', function ($id) {
    return view('product', ['product' => ProductsDetail::find($id)]);
});



Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
