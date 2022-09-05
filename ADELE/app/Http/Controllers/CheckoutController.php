<?php

namespace App\Http\Controllers;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CheckoutController extends Controller
{
   public function index()
    {

        $id = Auth::user()->id;
        $cart = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('carts.user_id', '=', $id)
            ->select('carts.id AS cartid', 'carts.user_id', 'products.nume as nume', 'products.id as id', 'carts.cantitate as cantitate', 'products.pret as pret', 'products.imagine as imagine')
            ->get()->toArray();
        $total = 0;
        foreach($cart as $cartItem){
            $pret = $cartItem->pret * $cartItem->cantitate;
            $total += $pret;
        }
        return view('checkout', compact('cart') );
    }

    public function placeorder(Request $request)
    {
      $order = new Order();
      $order->nume = $request->input('nume');
      $order->prenume = $request->input('prenume');
      $order->adresa = $request->input('adresa');
      $order->telefon = $request->input('telefon');
      $order->cod_postal = $request->input('cod_postal');
      $order->oras = $request->input('oras');
      $order->email = $request->input('email');
      $order->numar_comanda= 'ADELE'.rand(1111,9999);
      $order->save();




      $order->id;
      $id = Auth::user()->id;
      $cart = DB::table('carts')
          ->join('products', 'products.id', '=', 'carts.product_id')
          ->where('carts.user_id', '=', $id)
          ->select('carts.id AS cartid', 'carts.user_id', 'products.nume as nume', 'products.id as id',
          'carts.cantitate as cantitate', 'products.pret as pret', 'products.imagine as imagine')
          ->get()->toArray();

      foreach ($cart as $item)
      {
          OrderItem::create([
              'order_id' => $order->id,
              'product_id' => $item->id,
              'cantitate' => $item->cantitate,
               'pret'=>  $item->pret
          ]);

        }

        Cart::where('user_id', $id)->delete();
        return redirect('stripe')->with('status', "Comandă plasată cu succes!");

    }
    public function deliverOrder(Order $order)
    {
        $order->is_delivered = true;
        $status = $order->save();

        return response()->json([
            'status'    => $status,
            'message'   => $status ? 'Order Delivered!' : 'Error Delivering Order'
        ]);
    }
    public function destroy(Order $order)
    {
        $status = $order->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Order Deleted!' : 'Error Deleting Order'
        ]);
    }

}

