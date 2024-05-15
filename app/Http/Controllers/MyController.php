<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\ProductsDetail;

class MyController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about-us');
    }

    public function services(): View
    {
        return view('services');
    }

    public function blog(): View
    {
        return view('blog');
    }

    public function contact(): View
    {
        return view('contact-us');
    }

    public function cart(): View
    {
        return view('cart');
    }

    public function checkout(): View
    {
        return view('checkout');
    }

    public function thankyou(): View
    {
        return view('thankyou');
    }

    public function shop(): View
    {
        return view('shop', ['products' => ProductsDetail::paginate(8)]);
    }

    public function product($id): View
    {
        $product = ProductsDetail::find($id);
        if($product)
        return view('product', ['product' => $product]);
        abort(404);
    }

    public function signup(): View
    {
        return view('signup');
    }

    public function signin(): View
    {
        return view('signin');
    }

    public function forget(): View
    {
        return view('forget');
    }

}
