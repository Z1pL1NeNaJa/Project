<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class About extends Controller
{
    public function showproduct()
    {
        $product = Product::all();
        return view('about',compact('product'));
    }
}
