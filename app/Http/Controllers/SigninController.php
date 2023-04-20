<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Signin;

class SigninController extends Controller
{
    function index(){
        return view('sesi/signin');
    }
    public function login(Request $request){
        // Session::flash('email', $request->input('email'));
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::guard('user')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError','login failed!');
    }
    public function logout(){
        Auth::guard('user')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');



        // if (Auth::guard('user')->check()){
        //     Auth::guard('user')->logout();
        // }
        // return redirect('/login');



        // Auth::logout();
        // request()->session()->invalidate();
        // request()->session()->regenerateToken();
        // return redirect('/');
    }
}
