<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParacticeController extends Controller
{
    //
    function partice(){
        return "paractice controller";
    }
    function aboutController(){
        return view("about");
    }
}
