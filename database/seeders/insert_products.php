<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_name' => 'Nordic Chair',
            'amount' => 80.00,
            'image_url' => 'images/product-3.png',
            'description' => 'Durable sofa for medium house',
            'quantity' => 10,
            'category_id' => 1,

        ]);

        // Add more products
        DB::table('products')->insert([
            'product_name' => 'Elegant Sofa',
            'amount' => 120,
            'image_url' => 'images/product-1.png',
            'description' => 'Luxurious sofa for your living room.',
            'quantity' => 10,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'product_name' => 'Modern Coffee Table',
            'amount' => 50,
            'image_url' => 'images/product-2.png',
            'description' => 'Sleek and stylish coffee table.',
            'quantity' => 10,
            'category_id' => 1,
        ]);
    }
}
