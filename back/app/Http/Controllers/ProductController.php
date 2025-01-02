<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::get();
        return response()->json($product);
    }
    public function create(Request $request){
        $product = Product::create($request->all());
        return response()->json($product);
    }
}
