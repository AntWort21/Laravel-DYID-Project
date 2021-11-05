<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NewproductController extends Controller
{
    public function index()
    {
        return view('newproduct');
    }

    public function insert(Request $request){
        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
        $product->product_categoryid = $request->category;
        $product->product_image = $request->image;

        $product->save();
        return redirect('mainpage');
    }
    // <div class="title">
    //                     <h2>Add new product</h2>    
    //                 </div>

    //                 <div class="inputbox">
    //                     <input type="text" name="name" placeholder="Product Name" class="namebox">
    //                 </div>
    //                 <div class="inputbox">
    //                     <input type="text" name="description" placeholder="Description" class="descriptionbox">
    //                 </div>
    //                 <div class="inputbox">
    //                     <input type="text" name="price" placeholder="Price" class="pricebox">
    //                 </div>
    //                 <div class="inputbox">
    //                     <select name="category" class="categorybox">
    //                         <option value="1" selected>Electronics</option>
    //                         <option value="2" >Accessories</option>
    //                         <option value="3" >Games</option>
    //                     </select>
    //                 </div>
    //                 <div class="inputbox">
    //                     <input type="file" name="image" class="imagebox">
    //                 </div>
}
