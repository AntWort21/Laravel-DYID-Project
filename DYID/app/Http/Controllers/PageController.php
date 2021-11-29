<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function mainPage()
    {
        $products = Product::paginate(6);
        // dd($products);
        return view('mainpage', [
            'products' => $products
        ]);
    }

    public function productDetailPage(Request $request){
        $id = $request->id;

        $selectedProduct = Product::where('id', $id)->first();

        $data = [
            'selectedProduct' => $selectedProduct
        ];

        return view('productdetail', $data);
    }

    public function addProductPage(){
        $allCategories = Category::all();

        $arr = [
            'categories' => $allCategories
        ];
        
        return view('newproduct', $arr);
    }

    public function cartPage()
    {
        return view('cart');
    }

    public function editCartPage()
    {
        return view('editcart');
    }

    public function viewProductPage()
    {
        return view('viewproduct');
    }

    public function editCategoryPage(){
        return view('editcategory');
    }

    public function newCategoryPage(){
        return view('newcategory');
    }

    public function updateCategoryPage(){
        return view('updatecategory');
    }
}
