<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        // dd(session('cartItems'));
        return view('cart.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findorfail($id);
       $cartItems = session()->get('cartItems', []);

       if (isset($cartItems[$id])) {
           $cartItems[$id]["quantity"]++;
       }else{
        $cartItems[$id] = [
            "image_path" => $product->image_path,
            "name" => $product->name,
            "brand" => $product->brand,
            "details"=> $product->details,
            "price"=> $product->price,
            "quantity"=> 1
            
        ];
       }
       session()->put("cartItems", $cartItems);
      return redirect()->back()->with('success', 'added succesfully');
    }

      public function delete(Request $request)
    
      {
         if ($request->id) {
            $cartItems = session()->get('cartItems');
            if (isset($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put('cartItems', $cartItems);
            }
            return redirect()->back()->with('success', 'Product Deleted Successfully');
         }
        
    }
}
