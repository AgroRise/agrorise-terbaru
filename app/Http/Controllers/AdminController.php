<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('profileadmin-edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:4', 'max:20','regex:/^\S+$/', Rule::unique('admins')->ignore(Auth::guard('admin')->user()->id),]
        ], [
            'username.regex' => 'username tidak boleh spasi'
        ]);

        Auth::guard('admin')->user()->update([
            'username' => $request->username,
        ]);
        return redirect('/profileadmin')->with('success', 'Profil Berhasil Diperbarui');
    }
    public function file()
    {
        $data = User::orderBy('id', 'asc')->paginate(1);
        return view('admin')->with('data', $data);
    }
}
