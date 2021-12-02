<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function insertCart(Request $request){
        if(Cart::where('user_id',$request->user()->id)->get()->count() > 0){
            
            $cart = Cart::where('user_id',$request->user()->id)->first();

            $cartDetail = new CartDetail();
            $cartDetail->cart_id = $cart->id;
            $cartDetail->product_id = $request->id;
            $cartDetail->quantity = $request->quantity;
            $cartDetail->save();
        }
        else{
            $cart = new Cart();
            $cart->user_id = $request->user()->id;
            $cart->status = 0;//unpaid
            $cart->save();

            $cartDetail = new CartDetail();
            $cartDetail->cart_id = $cart->id;
            $cartDetail->product_id = $request->id;
            $cartDetail->quantity = $request->quantity;
            $cartDetail->save();
        }

        return redirect('/');
    }
}
