<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function adminlogin()
    {
        return view('admin2.login');
    }
    public function isadmin(Request $request)
    {
        // dd($request->all());
        $user = User::find(1);
        $userdata = array(
            'email'     => $request->email,
            'password'  => $request->pass
        );
    
        // attempt to do the login
        if (Auth::attempt($userdata)) 
        {
            return view('Category.create_category');
        }
        else{
            
            return back()->with('data','Oh,sorry!Email or Password is somethig wrong!');
        }
    }
    public function adminlogout()
    {
        Auth::logout();
        return view('admin2.login')->with('dataone','log out Successfully !');
    }
}
