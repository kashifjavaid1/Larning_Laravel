<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    function dataBase(){
        $users=DB::select('select * from users');
       return view('database.showdatabase',["user"=>$users]);
    }
}
