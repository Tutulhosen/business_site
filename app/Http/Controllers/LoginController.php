<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('backend.login');
    }

    public function loggedIn(Request $request){
        $email= $request->email;
        $password= $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return view('backend.dashboard');
        }else{
            return back();
        }
    }
}
