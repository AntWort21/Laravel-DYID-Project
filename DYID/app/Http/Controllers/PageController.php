<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage(){
        return view('auth.register');
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

    public function updateProductPage(Request $request){
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
        $selectedCart = Cart::where('user_id', Auth::user()->id)->first();
        $cartDetails = CartDetail::where('cart_id', $selectedCart->id)->get();
        $products = Product::all();
        $total = 0;

        foreach($cartDetails as $cartDetail ){//calculate total price
            foreach($products as $product){
                if($product->id == $cartDetail->product_id){
                    $total += $product->price;
                }
            }
        }

        $data = [
            'cartDetails' => $cartDetails,
            'products' => $products,
            'total' => $total
        ];

        return view('cart', $data);
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

    public function manageCategoryPage(){
        $categories = Category::all();

        $data = [
            'categories' => $categories
        ];

        return view('manageCategory', $data);
    }

    public function addCategoryPage(){
        return view('newCategory');
    }

    public function updateCategoryPage(Request $request){
        $id = $request->id;
        $selectedCategory = Category::where('id', $id)->first();
        $data = [
            'selectedCategory' => $selectedCategory
        ];
        return view('updateCategory', $data);
    }

    public function historyPage()
    {
        return view('history');
    }
}
