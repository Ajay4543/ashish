<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Auth\SessionController;


Route::get('/', [MyController::class, 'home']);
Route::get('/about-us  ', [MyController::class, 'about']);
Route::get('/services', [MyController::class, 'services']);
Route::get('/blog', [MyController::class, 'blog']);
Route::get('/contact-us', [MyController::class, 'contact']);


Route::get('/shop', [MyController::class, 'shop']);
Route::get('/product/{id}', [MyController::class, 'product']);
Route::get('/cart', [MyController::class, 'cart']);
Route::get('/checkout', [MyController::class, 'checkout']);
Route::get('/thankyou', [MyController::class, 'thankyou']);


Route::get('/signup', [SessionController::class, 'showSignupForm']);
Route::post('/signup', [SessionController::class, 'signup']);
Route::get('/signin', [SessionController::class, 'showSigninForm']);
Route::post('/signin', [SessionController::class, 'signin']);
Route::get('/forget', [SessionController::class, 'showForgetForm']);
Route::delete('/logout', [SessionController::class, 'logout']);