<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use User;

class EmployeerLoginController extends Controller
{
   public function showlogin(){
   		return view('/front/employeer/employeer_login');
   }

   public function login(Request $request){
        if (Auth::attempt(['student_id'=>$request->employeer_id, 'password'=>$request->password])) {

            if (Auth::user()->isEmployeer()) {
                $studentId = $request->employeer_id;
                return redirect('/employeer/dashboard/'.$studentId);
            }

        }else{

        Session::flash('login_error', 'Id or password didnt match');
        return redirect()->back();
        }

    }

    public function showDashboard()
    {
    	 $user = Auth::user();
       return view('/front/employeer/employeer_dashboard', compact('user'));
    }

   public function store()
   {
   	
   }
}
