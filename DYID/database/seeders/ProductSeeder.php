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
            'product_name' => 'Aqua',
            'product_description' => 'ini Aqua',
            'product_price' => '10000',
            'product_image' => 'image.jpg',
            'category_id' => '1'
        ]);
    }
}
