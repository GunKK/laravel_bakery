<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index() {
        $cart = session()->has('cart')? session()->get('cart') : [];
        $cart->count();
        dd($cart->count());
    }

    public function add($id) {
        $product = Product::findOrFail($id);
        $cart = session()->has('cart')? session()->get('cart') : [];
        // $cart = session()->get('cart', []);
        //  chưa có trong giỏ thì tạo mới, có rồi thì tăng số lượng
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = array(
                'name'=> $product->name,
                'price'=> $product->unit_price,
                'quantity'=> 1,
                'promotionPrice'=> $product->promotion_price,
                'img'=>$product->image
            );
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Thêm sản phẩm thành công !');                                                                         
    }

    public function update($action, $id) {
        $cart = session()->has('cart')? session()->get('cart') : [];
        // tạo nút cộng trừ
        switch ($action) {
            case 'add':
                $cart[$id]['quantity']++;
                break;
            case 'sub':
                $cart[$id]['quantity']--;
                break;
            
            default:
                return redirect()->back()->with('error', 'Lỗi thao tác!'); 
                break;
        }
        return redirect()->back()->with('success', 'Cập nhật thành công !');                                                                         
    }

    public function destroy($id) {
        $cart = session()->has('cart') ? session()->get('cart') : [];
        unset($cart[$id]); 
        session()->put('cart', $cart);
        $cart = session()->has('cart') ? session()->get('cart') : [];
        return redirect()->back()->with('success', 'Xóa khỏi giỏ thành công !');        
    }
}
