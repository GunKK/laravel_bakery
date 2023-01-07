<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Product_type;
use Carbon\Carbon;
// use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome() 
    {
        $newProducts = Product::where('new','=','1')->paginate(8, ['*'],'pageNew');
        $saleProducts = Product::where('promotion_price','!=','0')->paginate(8, ['*'],'pageSale');
        return view('Frontend.Pages.home', compact('newProducts','saleProducts'));
    }

    public function getProductType($id) 
    {   
        $productTypes = Product_type::all();
        $productTypeFind = Product_type::find($id);
        return view('Frontend.Pages.product_type', compact('productTypes', 'productTypeFind'));
    }

    public function getProduct($id) 
    {   
        $product = Product::find($id);
        $relationProducts = Product::where('id_type', '=', $product->id_type)->take(3)->get();
        $newProducts = Product::where('new', '=', '1')->orderBy('id', 'ASC')->take(4)->get(); 
        $saleProducts = Product::where('promotion_price', '!=', '0')->orderBy('id', 'ASC')->take(4)->get(); 
        return view('Frontend.Pages.product', compact('product', 'relationProducts', 'newProducts', 'saleProducts'));
    }

    public function getSearch(Request $req) {
        $val = $req->validate(
            [
                'key'=>'required'
            ],
            [
                'key.required'=>'Bạn chưa nhập nội dung tìm kiếm'
            ]
        );
        $key = $val['key'];
        $productTypes = Product_type::all();
        $count = Product::where('name','LIKE', '%'.$key.'%')
                            ->orWhere('description','LIKE', '%'.$key.'%')->get()->count();
        $products = Product::where('name','LIKE', '%'.$key.'%')
                            ->orWhere('description','LIKE', '%'.$key.'%')
                            ->paginate(6);
        return view('Frontend.Pages.search', compact('count' ,'key', 'productTypes', 'products'));
    }

    public function getAbout() 
    {
        return view('Frontend.Pages.about');
    }

    public function getContact() 
    {
        return view('Frontend.Pages.contact');
    }

    public function getCheckout() {
        if (Session::has('cart')) {
            return view('Frontend.Pages.checkout');
        } else {
            return view('Frontend.Pages.shopping_cart');
        }
    }

    public function postCheckout( Request $req ) {
        $mytime = Carbon::now()->toDateTimeString();
        $val = $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required',
                'payment_method' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Email không đúng định dạng',
                'phone.required' => 'Vui lòng nhập số điện thoại của bạn',
                'payment_method.required' => 'Vui lòng chọn phương thức thanh toán'
            ]
        );
        // dd(Session::get('cart')->items);
        $customer = new Customer();
        $customer->email = $val['email'];
        $customer->name = $val['name'];
        $customer->address = $val['address'];
        $customer->phone_number = $val['phone'];
        $customer->save();

        $bill = new Bill();
        $bill->id_customer = $customer->id;
        $bill->date_order = $mytime;
        $bill->payment_method = $val['payment_method'];
        $bill->total = $req->total;
        $bill->note = $req->note;
        $bill->save();

        foreach(Session::get('cart')->items as $key => $value)
        {
        $billDetail = new Bill_detail();
        $billDetail->id_bill = $bill->id;
        $billDetail->id_product = $key;
        $billDetail->quantity = $value["qty"];
        $billDetail->price = ($value["price"]/$value["qty"]);
        $billDetail->save();
        }


        $req->session()->forget('cart');
        return redirect()->route('checkout')->with('success', 'Thanh toán thành công');
    }
}
