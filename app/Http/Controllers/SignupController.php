<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('sesi/signup');
    }

    public function store(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:5|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', // mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka           
        ],['password.regex' => ' Mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka',]);
        // dd('registrasi berhasil'); 
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/signin')->with('success', 'Registration successfull! Please Login');
    }
}
