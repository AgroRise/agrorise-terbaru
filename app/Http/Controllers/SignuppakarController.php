<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignuppakarController extends Controller
{
    public function index()
    {
        return view('sesi/signup-pakar');
    }

    public function store(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:pakars',
            'nama' => 'required|min:4|max:30',
            'username' => 'required|min:4|max:20|unique:pakars',
            'password' => 'required|confirmed|min:5',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'instansi' => 'required',
            'alamat_instansi' => 'required',
            'cv' => 'required',
            'sertifikat' => 'required',
        ]);
        // dd('registrasi berhasil'); 
        $validatedData['password'] = Hash::make($validatedData['password']);
        Pakar::create($validatedData);
        return redirect('/signin-pakar')->with('success', 'Registration successfull! Please Login');
    }
}
