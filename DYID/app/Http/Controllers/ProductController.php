<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function insertProduct(Request $request){

        $val = Validator::make($request->all(),[
            'name' => ['required', 'unique:products', 'min:5'],
            'description' => ['required', 'min:50'],
            'price' => ['required', 'integer', 'min:1'],
            'category' => ['required'],
            'image' => ['required','image','mimes:jpg']
        ]);

        $val->validate();

        $image = $request->file('image');

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->image = $image->getClientOriginalName();
        Storage::putFileAs('public/productImage', $image, $image->getClientOriginalName());
        $product->save();
        return redirect('mainpage');
    }
}
