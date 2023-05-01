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
            'login' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::guard('user')->attempt(['email' => $credentials['login'], 'password' => $credentials['password']]) ||
            Auth::guard('user')->attempt(['username' => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }    
        elseif (Auth::guard('admin')->attempt(['email' => $credentials['login'], 'password' => $credentials['password']]) ||
            Auth::guard('admin')->attempt(['username' => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }    
        // if (Auth::loginUsingId(10)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }


        // if (Auth::guard('admin')->attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }    

        return back()->with('loginError','login failed!');
    }
    public function logout(){
        Auth::guard('user')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');

//username login

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
