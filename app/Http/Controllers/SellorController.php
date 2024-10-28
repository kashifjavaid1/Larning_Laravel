<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class SellorController extends Controller
{
    function product(Request $req){
        $products = Product::find(1)->onetoOne; 
         return $products;
    }
}
