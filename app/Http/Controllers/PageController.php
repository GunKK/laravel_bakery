<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
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
}
