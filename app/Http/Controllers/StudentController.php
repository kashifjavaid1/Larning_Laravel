<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStu(){
        $students=\App\Models\Student::all();
        return view("database.student",["std"=>$students]);
    }
}
