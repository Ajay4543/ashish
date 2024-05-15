<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', [MyController::class, 'home']);
Route::get('/about-us  ', [MyController::class, 'about']);
Route::get('/services', [MyController::class, 'services']);
Route::get('/blog', [MyController::class, 'blog']);
Route::get('/contact-us', [MyController::class, 'contact']);

Route::get('/signup', [MyController::class, 'signup']);
Route::get('/signin', [MyController::class, 'signin']);
Route::get('/forget', [MyController::class, 'forget']);

Route::get('/shop', [MyController::class, 'shop']);
Route::get('/product/{id}', [MyController::class, 'product']);

Route::get('/cart', [MyController::class, 'cart']);
Route::get('/checkout', [MyController::class, 'checkout']);
Route::get('/thankyou', [MyController::class, 'thankyou']);