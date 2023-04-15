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
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with('loginError','login failed!');

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        // if (Auth::attempt($infologin)) {    
        //     // return redirect('siswa')->with('success', 'Berhasil login');
        //     return 'sukses';
        // } else {
        //     // return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        //     return 'gagal';
        // }
    }
}
