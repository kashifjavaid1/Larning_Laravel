<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParacticeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SellorController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
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

// Route::get("/login/{name}",[AdminController::class,"loginUser"]);

// // Route::get("/home",function(){
// //     return view("home");
// // });

// Route::get("admin/{name}",function($name){
//    if (View::exists('admin.login')) {
//     return view("admin.login",["user"=>$name]);
//    }
//    else {
//     echo 'Not found route';
//    }
// });

// // route define and variable define
// Route::get("/home",function(){
//     $products=["cars","bikes","laptops","books","headPhones"];
//     $name="kashif";
//     return view("home",["users"=>$name, "products"=>$products]);
// });

Route::get("/header",function(){
    return view("subViews.main");
});
Route::get("home",[HomeController::class,"home"]);
Route::get('/home',[ParacticeController::class,"partice"]);
Route::get("/about",[ParacticeController::class,"aboutController"]);
Route::get('/home',fn()=> view('home'));

// Route::get("/",function(){
//     return view("welcome");
// });
// Route::get("/add-form",function(){
//     return view("admin.login");
// });

route::redirect('/name','/');

Route::get('/about',function(){
    return view("about");
});

Route::get('/name/{name}',function($name){
    // echo $name;
    return view('name',['name'=>$name]);
});

// Route::get("/controller",[UserController::class,'getUserName']);
// Route::get("/controllers",[UserController::class,'kashifName']);

Route::get("/sigin",function(){
    return view("admin.sigin");
});

Route::get("/register",function(){
    return view("form.register");
});
Route::post('add-user',[RegisterController::class,'registerUser']);

Route::get("/",function(){
    return view("welcome");
});


// any and Match route
// Route::any("user",[UserController::class,"any"]);
Route::match(["post","get"],'/user');

//   Backend  Connection 
Route::get("/users",[UserController::class,"getUser"]);

Route::get('/backend',[BackendController::class,'dataBase']);

// Student Tabel 
Route::get("/student",[StudentController::class,"getStu"]);

// Session create
Route::get("/session",function(){
    return view("database.user");
});

//  Crud implement
Route::post("login",[SessionController::class,"sessions"]);
Route::get("list",[SessionController::class,"list"]);
Route::get("delete/{id}",[SessionController::class,"delete"]);
Route::get("edit/{id}", [SessionController::class, "edit"]);
Route::post("edit/{id}", [SessionController::class, "update"]); 
Route::get("search", [SessionController::class,"search"]); 
Route::post('delete-multiple', [SessionController::class, 'deleteMultipleUsers']);

// Route::post("login",[FileController::class,'file']);

// Realtionships
Route::get("products", [SellorController::class,"product"]); 
Route::get("email",[MailController::class,"sendEmail"]);