<?php

namespace App\Http\Controllers;

use App\Student;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentLoginController extends Controller
{

    public function showlogin(){
        return view('/front/student/student_login');
    }

    public function login(Request $request){
  
        if (Auth::attempt(['student_id'=>$request->student_id, 'password'=>$request->password])) {

            if (Auth::user()->isStudent()) {
                $studentId = $request->student_id;
                return redirect('/student/dashboard/'.$studentId);
            }

        }else{

        Session::flash('login_error', 'Id or password didnt match');
        return redirect()->back();
        }

    }

    public function showDashboard($id){

        $user = Auth::user($id);

            return view('/front/student/student_dashboard', compact('user'));

        /*if (isset($user->student->id) == Auth::id()) {
            
        } else{
            return view('/front/student/student_dashboard_update', compact('user'));
        }*/
        

    }


    public function store(Request $request){
        $input = $request->except(['student_id', 'email']);

        $user = Auth::user();

        $student = new Student($input);
         
         $updt = Student::where('user_id', '=' , $user->id)->first();   
         if (isset(Auth::user()->student->user_id) == Auth::user()->id) {
            $updt->update($input);
         }else{
            $user->student()->save($student);
         }

         return redirect()->back();
    }
}
