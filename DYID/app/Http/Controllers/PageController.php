<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\History;
use App\Models\HistoryDetail;
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

    public function searchItem(Request $request){
        $searchedProducts = Product::where('name', 'like', "%$request->searchvalue%")->paginate(6);

        return view('mainPage', [
            'products' => $searchedProducts
        ]);
    }

    public function productDetailPage(Request $request){
        $id = $request->id;
        $categories = Category::all();
        $selectedProduct = Product::where('id', $id)->first();

        $data = [
            'selectedProduct' => $selectedProduct,
            'categories' => $categories
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
        if(Cart::where('user_id',Auth::user()->id)->get()->count() <= 0){//cart doesn't exist
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->save();
        }
        
        $selectedCart = Cart::where('user_id', Auth::user()->id)->first();
        $cartDetails = CartDetail::where('cart_id', $selectedCart->id)->get();
        $products = Product::all();
        $total = 0;
        $cart_id = $selectedCart->id;

        foreach($cartDetails as $cartDetail ){//calculate total price
            foreach($products as $product){
                if($product->id == $cartDetail->product_id){
                    $total += $product->price * $cartDetail->quantity;
                }
            }
        }

        $data = [
            'cartDetails' => $cartDetails,
            'products' => $products,
            'total' => $total,
            'cart_id' => $cart_id
        ];

        return view('cart', $data);
    }

    public function editCartPage(Request $request)
    {
        $product_id = $request->id;
        $user_id = $request->user()->id;
        $selectedCart = Cart::where('user_id', $user_id)->first();
        $selectedItem = CartDetail::where('product_id', $product_id)->where('cart_id', $selectedCart->id)->first();
        $products = Product::all();
        $data = [
            'selectedItem' => $selectedItem,
            'products' => $products
        ];
        return view('editCart', $data);
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
        // dd("halo");
        if(History::where('user_id',Auth::user()->id)->get()->count() <= 0){//history doesn't exist
            $checker = 0;

            $data = [
                'checker' => $checker,
            ];
        }
        else{//history exist
            $checker = 1;
            $total = 0;
            $histories = History::where('user_id', Auth::user()->id)->get();
            // dd($histories);
            $historyDetails = HistoryDetail::all();
            $products = Product::all();

            $data = [
                'histories' => $histories,
                'checker' => $checker,
                'historyDetails'=>$historyDetails,
                'products' => $products,
                'total' => $total
            ];
        }

        //delete cart_details contents


        return view('history', $data);
    }
}
