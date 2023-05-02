<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninadminController extends Controller
{
    function index(){
        return view('sesi/signin-admin');
    }
    public function login(Request $request){
        // Session::flash('email', $request->input('email'));
        $credentials = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::guard('admin')->attempt(['email' => $credentials['login'], 'password' => $credentials['password']]) ||
            Auth::guard('admin')->attempt(['username' => $credentials['login'], 'password' => $credentials['password']])) {
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
    }
}
