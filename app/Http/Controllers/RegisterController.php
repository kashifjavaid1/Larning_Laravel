<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function registerUser(Request $req){
        // this $req all input field data get
        return $req;
        // echo "User Name is: " . $req->userName;
        // echo '<br/>';
        // echo "User Email is: " . $req->userEmail;
        // echo '<br/>';
        // echo "User City is: " . $req->userCity;
        // echo '<br/>';
        // echo "User Skill is: " . $req->skill;
        // echo '<br/>';
        // echo "User Age is: " . $req->age;
        // echo '<br/>';
        // echo "User City is: " . $req->city;
        // echo '<br/>';
        
    }
}
