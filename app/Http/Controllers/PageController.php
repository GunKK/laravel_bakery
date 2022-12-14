<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome() 
    {
        $count = Product::where('new','=','1')->count();
        $products = Product::where('new','=','1')->paginate(8);
        return view('Frontend.Pages.home', compact('products', 'count'));
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
        // $newProducts = Product::orderBy('created_at', 'ASC')->take(4)->get();
        $newProducts = Product::where('new', '=', '1')->orderBy('id', 'ASC')->take(4)->get(); 
        return view('Frontend.Pages.product', compact('product', 'relationProducts', 'newProducts'));
    }

    public function getAbout() 
    {
        return view('Frontend.Pages.about');
    }

    public function getContact() 
    {
        return view('Frontend.Pages.contact');
    }

    public function getIntro() 
    {
        return view('Frontend.Pages.intro');
    }

    public function getLogin() 
    {
        return view('Frontend.Pages.login');
    }

    public function getSignUp() 
    {
        return view('Frontend.Pages.signup');
    }

}
