<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class SessionController extends Controller
{
   function sessions(Request $request) {
    $request->validate([
        'userName' => 'required',
        'userEmail' => 'required|email|unique:users,email', 
        'userPhone' => 'required'
    ]);
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
            // all data fetch
        //   return  $studentData=User::all();
            // pegination
            $studentData=User::paginate(5);
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

    // Edit function to populate form with existing data
     function edit($id) {
        $student = User::find($id);
        if ($student) {
            return view("database.edit", ["data" => $student]);
        } else {
            return redirect()->back()->with('error', 'Student not found');
        }
    }

    // Update function to save the edited data
     function update(Request $request, $id) {
        $student = User::find($id);
        if ($student) {
            $student->name = $request->userName;
            $student->email = $request->userEmail;
            $student->phone = $request->userPhone;
            $student->save();

            return redirect("list")->with('success', 'Student updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Student not found');
        }
    }

    // Search funcation 
    function search(Request $request){
      $studentData=User::where("name",'like',"%$request->search%")->get();
      return view("database.showuser",["user"=>$studentData,"search"=>$request->search]);

    }

    // Delete multiple
    function deleteMultipleUsers(Request $request){
     $ids=$request->ids;
        $isDeleted=User::destroy($ids);
        if ($isDeleted) {
            return redirect("list");
        }else{
            return "NO deleted";
        }
    }

}