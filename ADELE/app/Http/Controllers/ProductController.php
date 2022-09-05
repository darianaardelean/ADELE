<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Auth;

class ProductController extends Controller
{



   public function productList(){
       $products = Product::all()->take(8);
       $nextproducts = Product::offset(8)->limit(4)->get();
       return view('products', compact('products','nextproducts'));
   }


   public function singleProduct($id){
       $product = Product::findOrFail($id);
       return view('product', compact('product'));
   }

    public function insertNewProduct(){
        $data = request()->all();
        $product = Product::create($data);
        return view('product', compact('product'));
    }

    public function updateProduct(Request $request, $id){

       $product = Product::findOrFail($id);
       $product->fill(request()->except(['_token', '_method']));
       $product->save();
       return redirect()->route('productslist');
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('productslist');
    }

}
