<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // Add User 
    public function addUser(Request $request){
        $users = DB::table('students')->insert([
            'name' => $request->username,
            'email' => $request->email,
            'address' => $request->address
        ]);

        if($users){
            echo "<script>window.alert('Data Inserted Successfully.')</script>";
            // echo "<h1 class='text-success'>Data Inserted Successfully.</h1>";
            return redirect()->route('home');
        }else{
            echo "<h1 class='text-danger'>Failed! Please try again.</h1>";
        }
    }
    
    // select all users
    public function showStudent(){
        $users = DB::table('students')->get();
        return view('welcome', ['data' => $users]);
    }

    // view single user
    public function signleShow($id){
        $users = DB::table('students')->where('id', $id)->get();

        return view('view', ['data' => $users]);
    }

    // delete user
    public function deleteUser($id){
        $users = DB::table('students')->where('id', $id)->delete();
        
        if($users){
            echo "<h1>".$id." number data Deleted Successfully.</h1>";
            return redirect()->route('home');
        }else{
            echo "<h1>Failed! Please try again.</h1>";
        }

    }

    // update user 
    public function updatePage(string $id){
        // $users = DB::table('students')->where('id', $id)->update();
        $users = DB::table('students')->find($id);
        return view('updateUser', ['data' => $users]);
    }

    public function UpdateUser(Request $request, $id){
        $users = DB::table('students')->where('id', $id)->update([
            'name' => $request->username,
            'email' => $request->email,
            'address' => $request->address
        ]);

        if($users){
            return redirect()->route('home');
        }else{
            echo "<h1>Failed! Please try again.</h1>";
        }

    }
}
