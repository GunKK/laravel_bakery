<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        return view('customers.cart');
    }

    public function add(Request $request) {
        $id = $request->id;
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price_base,
                "image" => $product->images
            ];

            session()->put('cart', $cart);
            $cart = session()->get('cart');
            return response()->json($cart);
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request) {
        $cart = session()->get('cart');
        
        $cart[$request->id]["quantity"] =  ($request->action == 'add')
        ? $cart[$request->id]["quantity"]++ 
        : $cart[$request->id]["quantity"]--;

        session()->put('cart', $cart);
        session()->flash('success', 'Cart updated successfully');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
