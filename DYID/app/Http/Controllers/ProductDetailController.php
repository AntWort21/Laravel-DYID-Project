<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index()
    {
        return view('productdetail');
    }

    public function addcart()
    {
        return redirect('mainpage');
    }
}
