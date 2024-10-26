<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    //
    function getUser(){
        // Model Base use Query
        $result=User::all();
//         $result=User::where('phone','12345')->first();
//    $result=[$result];
// $result=User::insert([
//     "name"=>"user1",
//     "email"=>"user@gmail.com",
//     "phone"=>"123456"
// ]);
// $result=User::where("name",'user1')->update(["phone"=>"22222"]);
// $result=User::where("id","6")->delete();


        // Direct database use in controller
    //    $result=DB::table("users")->get();
    // $result=DB::table("users")->where("phone",'12345')->get();
    // $result = DB::table("users")->find(1);
       return $result;
    }

};
