<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class SessionController extends Controller
{
   function sessions(Request $request) {
   $student= new User();
   $student->name=$request->userName;
   $student->email=$request->userEmail;
   $student->phone=$request->userPhone;
   $student->save();
   if ($student) {
    echo redirect("list");
   }else {
    echo "no student add";
   }
   }

         // get User funcations
         function list(){
            $studentData=User::all();
            return view("database.showuser",["user"=>$studentData]);
         }
        //  delete user funcation
        function delete($id){
            $isDeleted=User::destroy($id);
            if ($isDeleted) {
                return redirect("list");
            }else{
                return "NO deleted";
            }
        }
}
