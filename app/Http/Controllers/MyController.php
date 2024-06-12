<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class MyController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('aboutUs');
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
        return view('contactUs');
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
        return view('shop', ['products' => Product::paginate(8)]);
    }

    public function product($id): View
    {
        $product = Product::find($id);
        if($product)
        return view('product', ['product' => $product]);
        abort(404);
    }
}
