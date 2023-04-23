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
        $msg = "Đã thêm ".$product->name." thành công vào giỏ";

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price_base,
                "image" => $product->images
            ];

            session()->put('cart', $cart);
            $cart = session()->get('cart');
            return response()->json([
                'message' => $msg,
                'header_cart'=> view('customers.header_cart')->render()
            ]);
        }

        session()->put('cart', $cart);
        return response()->json([
            'message' => $msg,
            'header_cart'=> view('customers.header_cart')->render()
        ]);
    }

    public function update(Request $request) {
        $cart = session()->get('cart'); 
        $msg = $msg = "Cập nhật ".$cart[$request->id]['name']." thành công";

        if ($request->action == 'add') {
            $cart[$request->id]["quantity"] += 1;   
        } else {
            $cart[$request->id]["quantity"] -= 1;
            if ($cart[$request->id]["quantity"] == 0) {
                unset($cart[$request->id]);
            }
        }

        session()->put('cart', $cart);

        return response()->json([
            'message' => $msg,
            'header_cart'=> view('customers.header_cart')->render(),
            'shopping_cart' => view('customers.shopping_cart')->render()
        ]);
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        $msg = $msg = "Đã xóa ".$cart[$request->id]['name']." khỏi giỏ";

        unset($cart[$request->id]);
        session()->put('cart', $cart);

        if (sizeof(session()->get('cart')) == 0) {
            $request->session()->forget('cart');
        }

        return response()->json([
            'message' => $msg,
            'header_cart'=> view('customers.header_cart')->render(),
            'shopping_cart' => view('customers.shopping_cart')->render()
        ]);
    }
}
