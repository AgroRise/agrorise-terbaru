<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use CreateRegenciesTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SignupController extends Controller
{

    // buat akun user
    public function index1()
    {
        return view('sesi.signup');
    }

    public function store1(Request $request)
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
        return redirect()->route('signin.index')->with('success', 'Registration successfull! Please Login');
    }

    // buat akun pakar
    public function index2()
    {
        $provincies = Province::all();
        $regencies = Regency::all();
        return view('sesi.signup-pakar', compact('provincies','regencies'));
    }
    public function store2(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:pakars',
            'nama' => 'required|min:4|max:30',
            'username' => 'required|min:4|max:20|unique:pakars|regex:/^\S+$/',
            'password' => 'required|confirmed|min:5|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'no_telepon' => 'required',
            'regencies_id' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'instansi' => 'required',
            'cv' => 'required|mimes:pdf',
            'portofolio' => 'required|mimes:pdf',
        ], [
            'password.regex' => ' Mengandung setidaknya 1 huruf besar, 1 huruf kecil, dan 1 angka',
            'username.regex' => 'username tidak boleh spasi',
            'cv.mimes' => 'File harus berformat PDF',
            'portofolio.mimes' => 'File harus berformat PDF',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $cvFile = $request->file('cv');
        $cvNama = time() . '.' . $cvFile->getClientOriginalExtension();
        $cvFile->move('cv', $cvNama);

        $portofolioFile = $request->file('portofolio');
        $portofolioNama = time() . '.' . $portofolioFile->getClientOriginalExtension();
        $portofolioFile->move('portofolio', $portofolioNama);

        $validatedData['cv'] = $cvNama;
        $validatedData['portofolio'] = $portofolioNama;
   
        Pakar::create($validatedData);

        return redirect()->route('signin.pakar.index')->with('success', 'Pendaftaran Berhasil! Silahkan Masuk');
    }
    //fitur baca database di admin
    // public function user()
    // {
    //     $data = User::orderBy('id', 'asc')->paginate(1);
    //     return view('database.admin-user')->with('data', $data);
    // }
    // public function pakar()
    // {
    //     $data = Pakar::orderBy('id', 'asc')->paginate(3);
    //     return view('database.admin-pakar')->with('data', $data);
    // }
}
