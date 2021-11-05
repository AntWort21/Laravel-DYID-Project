<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'A',
            'product_description' => 'ini A',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'B',
            'product_description' => 'ini B',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'C',
            'product_description' => 'ini C',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'D',
            'product_description' => 'ini D',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'E',
            'product_description' => 'ini E',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'F',
            'product_description' => 'ini F',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'G',
            'product_description' => 'ini G',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'H',
            'product_description' => 'ini H',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'product_name' => 'I',
            'product_description' => 'ini I',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
    }
}
