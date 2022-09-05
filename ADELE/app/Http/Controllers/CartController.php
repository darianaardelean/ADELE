<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Cart;
use DB;
use Auth;

class CartController extends Controller
{
    public function getItemsFromCart(){
        $id = Auth::user()->id;
        $cart = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('carts.user_id', '=', $id)
            ->select('carts.id AS cartid', 'carts.user_id', 'products.nume as nume', 'products.id as id', 'carts.cantitate as cantitate', 'products.pret as pret', 'products.imagine as imagine', )
            ->get()->toArray();
        $total = 0;
        foreach($cart as $cartItem){
            $pret = $cartItem->pret * $cartItem->cantitate;
            $total += $pret;
        }
        return view('cart', compact('cart', 'total'));
    }


    public function deleteItemFromCart($productid){
        $id = Auth::user()->id;
        DB::table('carts')
            ->where('carts.product_id', '=', $productid)
            ->where('carts.user_id', '=', $id)
            ->delete();
        return redirect()->route('carts');
    }

    public function addItemToCart($productId){
        $id = Auth::user()->id;
        $cantitate = Request::input('cantitate');
        $cart = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('carts.user_id', '=', $id)
            ->where('products.id', '=', $productId)
            ->select('carts.id AS cartid', 'carts.user_id', 'products.nume as nume', 'products.id as id',
             'carts.cantitate as cantitate', 'products.pret as pret', 'products.imagine as imagine')
            ->get();

        if(!$cart->isEmpty()){
            if(!$cart->isEmpty()){
            $updateCart = DB::table('carts')
                ->where('carts.user_id', '=', $id)
                ->where('carts.product_id', '=', $productId)
                ->update(['cantitate' => $cantitate]);
            return redirect()->route('carts');
        }
        else {
            $cart = new Cart();
            $cart->cantitate = $cantitate;
            $cart->user_id = $id;
            $cart->product_id = $productId;
            $cart->save();
            return redirect()->route('carts');
        }

    }
}
}
