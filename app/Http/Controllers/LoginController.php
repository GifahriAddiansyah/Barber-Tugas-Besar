<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }
        return redirect('login');
    }
    public function login()
    {
        return view('login.login');
    }
    public function register()
    {
        return view('login.register');
    }
    public function logout (Request $request){
        Auth::logout();
            return redirect('/login');
        }
}
