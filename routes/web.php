<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParacticeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login/{name}",[AdminController::class,"loginUser"]);

// Route::get("/home",function(){
//     return view("home");
// });

Route::get("admin/{name}",function($name){
   if (View::exists('admin.login')) {
    return view("admin.login",["user"=>$name]);
   }
   else {
    echo 'Not found route';
   }
});

Route::get("/home",function($name){
    $name="kashif";
    return view("home",["users"=>$name]);
});

// Route::get("home",[HomeController::class,"home"]);
// Route::get('/home',[ParacticeController::class,"partice"]);
// Route::get("/about",[ParacticeController::class,"aboutController"]);
// Route::get('/home',fn()=> view('home'));


// route::redirect('/name','/');

// Route::get('/about',function(){
//     return view("about");
// });

// Route::get('/name/{name}',function($name){
//     // echo $name;
//     return view('name',['name'=>$name]);
// });

// Route::get("/controller",[UserController::class,'getUserName']);
// Route::get("/controllers",[UserController::class,'kashifName']);