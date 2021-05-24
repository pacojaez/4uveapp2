<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Prueba extends Controller
{
    public function inactive( )
    {
        // dd('Hello world');
        $products = Product::all();
        // $products = DB::table('products')->where('active', 1)->get();
        dd($products);
        return view('products.inactive', compact('products'));

    }
}
