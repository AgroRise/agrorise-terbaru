<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('user/profile-edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:4', 'max:20', 'regex:/^\S+$/', Rule::unique('users')->ignore(Auth::guard('user')->user()->id),]
        ], ['username.regex' => 'username tidak boleh spasi']);

        Auth::guard('user')->user()->update([
            'username' => $request->username,
        ]);
        return redirect('/profile')->with('success', 'Profil Berhasil Diperbarui');
    }
}
