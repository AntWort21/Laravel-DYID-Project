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
            'name' => 'Iphone 13',
            'description' => 'Apple s newest model in the market with the newest features and a slightly different camera design',
            'price' => '18000000',
            'image' => 'Apple_Phone.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Samsung Galaxy Fold 3',
            'description' => 'Samsung s newest model with flexible screen leading to the phone being able to be folded into a bigger screen',
            'price' => '14000000',
            'image' => 'Samsung_Phone.jpg',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'LG Fridge 420',
            'description' => 'LG Fridge Model 420 smart fridge with built in freezer and a see through glass screen with LED lights',
            'price' => '20000000',
            'image' => 'LG_Fridge.jpg',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Samsung Fridge Flower Edition',
            'description' => 'Samsung Limited Edition Flower crest edition 2020. Strong, light, and able to go as low as 10C degrees',
            'price' => '19500000',
            'image' => 'Samsung_Fridge.jpg',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Toshiba Fridge Black 370',
            'description' => 'Toshiba Model 370 in black. Released in 2018 with multi fan cooling system able to freeze anything inside',
            'price' => '10000000',
            'image' => 'Toshiba_Fridge.jpg',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Philip 4100 TV',
            'description' => 'Philip Television model 4100. Released in 2021 December. Incredible Quality with three year insurance',
            'price' => '26000000',
            'image' => 'Philip_TV.jpg',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Samsung QLED TV 4K',
            'description' => 'Samsung QLED Television. Released in 2021 and able to support 4K. Smart Bluetooth features',
            'price' => '22500000',
            'image' => 'Samsung_TV.jpg',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Sony X85J 50 Inch TV',
            'description' => 'Sony model X85J. Supports Ultra HD LED, 4K, Smart Television. 120Hz and high radiant colors',
            'price' => '23000000',
            'image' => 'Sony_TV.jpg',
            'category_id' => '3'
        ]);
    }
}
