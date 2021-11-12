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
            'name' => 'A',
            'description' => 'ini A',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'B',
            'description' => 'ini B',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'C',
            'description' => 'ini C',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'D',
            'description' => 'ini D',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'E',
            'description' => 'ini E',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'F',
            'description' => 'ini F',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'G',
            'description' => 'ini G',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'H',
            'description' => 'ini H',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'I',
            'description' => 'ini I',
            'price' => '10000',
            'image' => 'image.jpg',
            'category_id' => '1'
        ]);
    }
}
