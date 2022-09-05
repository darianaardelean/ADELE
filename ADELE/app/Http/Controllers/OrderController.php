<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;
use Auth;

class OrderController extends Controller
{
    public function getPastOrders(){

        $order = DB::table('orders')
            ->distinct()
            ->join('order_items', 'order_items.order_id', '=', 'orders.id')
            ->select('orders.nume','orders.prenume','orders.email','orders.adresa','orders.telefon','orders.oras','orders.cod_postal','orders.numar_comanda','orders.created_at','orders.id' , 'order_items.product_id' )
            ->get()->toArray();
            return view('orders', compact('order') );
        }
         public function deleteItemFromOrder($order_id){
      $id = Auth::user()->id;
        DB::table('orders')
            ->where('orders.id', '=', $order_id)
            ->delete();
        return redirect()->route('orders');

        }


    }




