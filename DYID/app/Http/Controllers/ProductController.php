<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function insertProduct(Request $request){

        $image = $request->file('image');


        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
        $product->product_categoryid = $request->category;
        $product->product_image = $image->getClientOriginalName();
        Storage::putFileAs('public/productImage', $image, $image->getClientOriginalName());
        $product->save();
        return redirect('mainpage');
    }
}
