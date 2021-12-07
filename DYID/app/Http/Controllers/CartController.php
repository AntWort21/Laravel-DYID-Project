<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function insertCart(Request $request){ 

        $val = Validator::make($request->all(),[
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $val->validate();


        $cart = Cart::where('user_id',$request->user()->id)->first();
        $inCartDetails = CartDetail::where('cart_id', $cart->id)->where('product_id', $request->id)->first();

        if(!is_null($inCartDetails)){//item already exist in cart
            CartDetail::where('cart_id', $cart->id)->where('product_id', $request->id)->update([
                'quantity' => $inCartDetails->quantity + $request->quantity
            ]); 
        }
        else{//item doesn't exist in cart
            $cartDetail = new CartDetail();
            $cartDetail->cart_id = $cart->id;
            $cartDetail->product_id = $request->id;
            $cartDetail->quantity = $request->quantity;
            $cartDetail->save();
        }
        
        return redirect('/');
    }

    public function editCart(Request $request){

        $val = Validator::make($request->all(),[
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $val->validate();

        $product_id = $request->id;
        $user_id = $request->user()->id;
        $selectedCart = Cart::where('user_id', $user_id)->first();
        $qty = $request->quantity;
        CartDetail::where('cart_id', $selectedCart->id)->where('product_id', $product_id)->update([
            'quantity' => $qty
        ]);
        return redirect('/cart');
    }

    public function deleteCart(Request $request){
        $product_id = $request->id;
        $user_id = $request->user()->id;
        $selectedCart = Cart::where('user_id', $user_id)->first();
        $selectedCartDetail = CartDetail::where('cart_id', $selectedCart->id)->where('product_id', $product_id);
        $selectedCartDetail->delete();
        return redirect('/cart');
    }
}
