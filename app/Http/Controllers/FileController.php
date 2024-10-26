<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function file(Request $request){
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,jpeg,pdf|max:2048',
        ]);
        $originalName = $request->file("file")->getClientOriginalName();
        $path = $request->file("file")->storeAs("public", $originalName);
        $fileName = explode("/", $path);
        $file = $fileName[1];
        return view("login", ["file" => $file]);
    }
}
