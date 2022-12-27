<?php

namespace App\Http\Controllers;

use App\Models\Product_type;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index() {
        $productTypes = Product_type::paginate(4); 
        return view('Backend.ProductTypes.index', compact('productTypes'));
    }

    public function create() {
        return view('Backend.ProductTypes.add');
    }

    public function store() {

    }

    public function edit() {
        return view('Backend.ProductTypes.edit');
    }

    public function update() {

    }

    public function destroy() {

    }

}
