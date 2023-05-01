<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function index(){
        return view('password-edit-user');
    }
    public function update(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);

        if (Hash::check($request->current_password, Auth::guard('user')->user()->password)) {

            Auth::guard('user')->user()->update(['password'=>Hash::make($request->password)]);
            
            return back()->with('message', 'kata sandi anda telah diperbarui');
        }
        throw ValidationException::withMessages([
            'current_password' => 'kata sandi Anda saat ini tidak cocok dengan catatan kami',
        ]);
    }
}
 