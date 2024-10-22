<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function registerUser(Request $req){
        // this $req all input field data get
        // return $req;
        echo $req->userName;
        echo '<br/>';
        echo $req->userEmail;
        echo '<br/>';
        echo $req->userCity;
    }
}
