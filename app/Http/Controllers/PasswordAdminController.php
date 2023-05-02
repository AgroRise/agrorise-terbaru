<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordAdminController extends Controller
{
    public function index()
    {
        return view('password-edit-admin');
    }
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:5|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', // mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka',
        ], [
            'password.regex' => ' Mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka'
        ]);

        if (Hash::check($request->current_password, Auth::guard('admin')->user()->password)) {

            Auth::guard('admin')->user()->update(['password' => Hash::make($request->password)]);

            return back()->with('message', 'kata sandi anda telah diperbarui');
        }
        throw ValidationException::withMessages([
            'current_password' => 'kata sandi Anda saat ini tidak cocok dengan catatan kami',
        ]);
    }
}
