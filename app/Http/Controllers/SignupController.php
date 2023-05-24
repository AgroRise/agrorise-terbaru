<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{

    // buat akun user
    public function index1()
    {
        return view('sesi/signup');
    }

    public function signup1(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:20|unique:users|regex:/^\S+$/',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:5|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', // mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka           
        ], [
            'password.regex' => ' Mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka',
            'username.regex' => 'username tidak boleh spasi'
        ]);

        // dd('registrasi berhasil'); 
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/signin')->with('success', 'Registration successfull! Please Login');
    }


    // buat akun pakar
    public function index2()
    {
        return view('sesi/signup-pakar');
    }
    public function signup2(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:pakars',
            'nama' => 'required|min:4|max:30',
            'username' => 'required|min:4|max:20|unique:pakars|regex:/^\S+$/',
            'password' => 'required|confirmed|min:5|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'instansi' => 'required',
            'alamat_instansi' => 'required',
            'cv' => 'required',
            'sertifikat' => 'required'
            // 'cv' => 'required|mimes:pdf',
            // 'sertifikat' => 'required|mimes:pdf'
        ], [
            'password.regex' => ' Mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka',
            'username.regex' => 'username tidak boleh spasi',
            // 'cv.mimes' => 'file harus pdf',
            // 'sertifikat.mimes' => 'file harus pdf'
        ]);
        // $cv_file = $request->file('cv');
        // $cv_ekstensi = $cv_file->extension();
        // $cv_nama = date('ymdhis'). ".".$cv_ekstensi;
        // $cv_file->move(public_path('cv'),$cv_nama);

        // dd('registrasi berhasil'); 
        $validatedData['password'] = Hash::make($validatedData['password']);
        Pakar::create($validatedData);
        return redirect('/signin-pakar')->with('success', 'Registration successfull! Please Login');
    }
}
