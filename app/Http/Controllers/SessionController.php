<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class SessionController extends Controller
{
   function sessions(Request $request) {
       $request->validate([
           'userName' => 'required|string|max:255',
           'userEmail' => 'required|string|email|max:255|unique:users,email', 
       ]);

       
       $user = User::create([
           'name' => $request->input('userName'),
           'email' => $request->input('userEmail'),
           "phone"=>$request->input("userPhone")
       ]);
       $request->session()->flash("message","user has been successful");
    //    return response()->json(['message' => 'User created successfully!', 'user' => $user], 201);
   }
}
