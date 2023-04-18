<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
    $products = Product::where('active','=', 1)->orderBy("id", "ASC")->paginate(6);
        $categories = Category::all();
        return view('customers.products.index', compact('products', 'categories'));
    }

    public function show($id)
    {   
        $product = Product::findOrFail($id);
        $categoryId = $product->category->id;
        $sameProducts = Product::find($categoryId)->latest()->take(5)->get();
        // dd($sameProduct);
        return view('customers.products.show', compact('product', 'sameProducts'));
    }
}
