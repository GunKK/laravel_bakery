<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
// use Illuminate\Contracts\Session\Session;    
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class CartController extends Controller
{
    // public function add($id) {
    //     $product = Product::findOrFail($id);
    //     //  chưa có trong giỏ thì tạo mới, có rồi thì tăng số lượng
    //     if (isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = array(
    //             'name'=> $product->name,
    //             'price'=> $product->unit_price,
    //             'quantity'=> 1,
    //             'promotionPrice'=> $product->promotion_price,
    //             'img'=>$product->image
    //         );
    //     }
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Thêm sản phẩm thành công !');                                                                         
    // }

    // public function update($action, $id) {
    //     $cart = Session::has('cart')? Session::get('cart') : [];
    //     // tạo nút cộng trừ
    //     switch ($action) {
    //         case 'add':
    //             $cart[$id]['quantity']++;
    //             break;
    //         case 'sub':
    //             $cart[$id]['quantity']--;
    //             break;
            
    //         default:
    //             return redirect()->back()->with('error', 'Lỗi thao tác!'); 
    //             break;
    //     }
    //     return redirect()->back()->with('success', 'Cập nhật thành công !');                                                                         
    // }

    // public function destroy($id) {
    //     $cart = Session::has('cart')? Session::get('cart') : [];
    //     unset($cart[$id]); 
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Xóa khỏi giỏ thành công !');        
    // }

    public function index() {
        return view('Frontend.Pages.shopping_cart');
    }

    public function add(Request $req, $id) {
        $product = Product::findOrFail($id);
        $oldCart = Session::get('cart',[]);
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Thêm sản phẩm thành công');
    }

    public function destroy(Request $req, $id) {
        $oldCart = Session::get('cart',[]);
        $cart = new Cart($oldCart);
        $cart->remove($id);
        if (count($cart->items) == 0) {
            $req->session()->forget('cart');
        } else {
            $req->session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Xóa sản phẩm thành công');
    }
}
