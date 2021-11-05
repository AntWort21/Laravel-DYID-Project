<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        // dd($products);
        return view('mainpage', [
            'products' => $products
        ]);
    }


    public function viewProductDetail(){

        return view('product_detail');
    }
}
