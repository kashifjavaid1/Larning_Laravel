<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    function getStu(Request $res){
        echo $res->ip();
        echo "<br>"; 
    echo "<br>";
        echo $res->url();
        echo "<br>"; 
        echo "<br>";
        echo $res->path();
         // $students=\App\Models\Student::all();
        // return view("database.student",["std"=>$students]);
        $response=Http::get('https://fakestoreapi.com/users');
        // $response=json_decode($response->body(), true);;
        return view("database.student", ["std" => json_decode($response)]);
       
    }
}
