<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\History;
use App\Models\HistoryDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function insertHistory(Request $request){
        // dd($request->id);
        $cart_id = $request->id;
        $date = date('Y-m-d H:i:s');
        
        $cartDetails = CartDetail::where('cart_id', $cart_id)->get();
        $products = Product::all();

        //create history
        // History::where('user_id',$request->user()->id)->get()->count() <= 0)
        $history = new History();
        $history->user_id = $request->user()->id;
        $history->date = $date;
        $history->save();

        foreach($cartDetails as $cartDetail){
            foreach($products as $product){
                if($product->id == $cartDetail->product_id){
                    //insert to historyDetail
                    $historyDetail = new HistoryDetail();
                    $historyDetail->history_id = $history->id;
                    $historyDetail->product_id = $product->id;
                    $historyDetail->quantity = $cartDetail->quantity;
                    $historyDetail->price = $product->price;
                    $historyDetail->save();
                }
            }
        }

        return redirect('/history');

    }
}
