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
        return view('admin/profileadmin-edit');
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
    public function user()
    {
        $data = User::orderBy('id', 'asc')->paginate(1);
        return view('database/admin-user')->with('data', $data);
    }
    public function pakar(){
        $data = Pakar::orderBy('id', 'asc')->paginate(1);
        return view('database/admin-pakar')->with('data', $data);
    }
    // public function file(){
    //     file_cv = $request

    //     // $data = Pakar::
    //     return view('file')->with('file'$data);
    // }
}
