<?php

namespace App\Models;
use Illuminate\Support\Arr;

class ProductsDetail
{
    public static function all(): array
    {
        return [
            [   
                'id' => 1,
                'url' => 'images/product-3.png',
                'name' => 'Nordic Chair',
                'price' => '$80.00'
            ],
            [
                'id' => 2,
                'url' => 'images/product-1.png',
                'name' => 'Kruzo Aero Chair',
                'price' => '$50.00'
            ],
            [

                'id' => 3,
                'url' => 'images/product-3.png',
                'name' => 'Ergonic Chair',
                'price' => '$100.00'
            ],
            [
                'id' => 4,
                'url' => 'images/product-2.png',
                'name' => 'Aero Chair',
                'price' => '$50.00'
            ],
            [
                'id' => 5,
                'url' => 'images/product-1.png',
                'name' => 'Kruzo Aero Chair',
                'price' => '$50.00'
            ],
            [
                'id' => 6, 
                'url' => 'images/product-3.png',
                'name' => 'Ergonic Chair',
                'price' => '$100.00'
            ],
            [
                'id' => 7, 
                'url' => 'images/product-2.png',
                'name' => 'Aero Chair',
                'price' => '$50.00'
            ],
            [
                'id' => 8,
                'url' => 'images/product-1.png',
                'name' => 'Kruzo Aero Chair',
                'price' => '$50.00'
            ]
        ];
    }

    public static function find(int $id)
    {
        return Arr::first(static::all(), fn($product) => $product['id'] == $id);
    }
}