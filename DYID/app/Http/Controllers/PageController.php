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
        return view('mainPage', [
            'products' => $products
        ]);
    }

    public function productDetailPage(Request $request){
        $id = $request->id;

        $selectedProduct = Product::where('id', $id)->first();

        $data = [
            'selectedProduct' => $selectedProduct
        ];

        return view('productDetail', $data);
    }

    public function productUpdatePage(Request $request){
        $id = $request->id;
        $selectedProduct = Product::where('id', $id)->first();
        $categories = Category::all();
        $data = [
            'selectedProduct' => $selectedProduct,
            'categories' => $categories
        ];
        return view("updateProduct", $data);
    }

    public function addProductPage(){
        $allCategories = Category::all();

        $arr = [
            'categories' => $allCategories
        ];
        
        return view('newProduct', $arr);
    }

    public function cartPage()
    {
        return view('cart');
    }

    public function editCartPage()
    {
        return view('editCart');
    }

    public function manageProductPage()
    {
        $products = Product::all();
        $categories = Category::all();
        $data = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('manageProduct', $data);
    }

    public function editCategoryPage(){
        return view('editCategory');
    }

    public function newCategoryPage(){
        return view('newCategory');
    }

    public function updateCategoryPage(){
        return view('updateCategory');
    }
}
