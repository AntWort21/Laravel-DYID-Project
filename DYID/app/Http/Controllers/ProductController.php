<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        return redirect('/manageproduct');
        
    }

    public function deleteProduct(Request $request){
        $id = $request->id;
        $selectedProduct = Product::where('id', $id)->first();
        $selectedProduct->delete();
        return redirect('/manageproduct');
    }
    public function updateProduct(Request $request){
        
        $val = Validator::make($request->all(),[
            'name' => ['required', 'unique:products,name,'.$request->id, 'min:5'],

            'description' => ['required', 'min:50'],
            'price' => ['required', 'integer', 'min:1'],
            'category' => ['required'],
            'image' => ['image','mimes:jpg']
        ]);

        $val->validate();
        
        $image = $request->file('image');
        $id = $request->id;

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $category_id = $request->category;

        if($image != null){
            $imageName = $image->getClientOriginalName();
            Storage::putFileAs('public/productImage', $image, $image->getClientOriginalName());

            Product::where('id', $id)->first()->update([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'category_id' => $category_id,
                'image' => $imageName
            ]);
        }
        else{
            Product::where('id', $id)->first()->update([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'category_id' => $category_id,
            ]);
        }
        return redirect('/manageproduct');
    }
}
