<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function insertProduct(Request $request){
        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
        $product->product_categoryid = $request->category;
        $product->product_image = $request->image;
        $product->save();
        return redirect('mainpage');
    }
}
