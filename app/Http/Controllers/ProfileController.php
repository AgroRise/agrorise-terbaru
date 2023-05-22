<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    // edit profil user
    public function index1()
    {
        return view('user/profile-edit');
    }
    public function update1(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:4', 'max:20', 'regex:/^\S+$/', Rule::unique('users')->ignore(Auth::guard('user')->user()->id),]
        ], ['username.regex' => 'username tidak boleh spasi']);

        Auth::guard('user')->user()->update([
            'username' => $request->username,
        ]);
        return redirect('/profile')->with('success', 'Profil Berhasil Diperbarui');
    }


    // edit profil pakar
    public function index2()
    {
        return view('pakar/profilepakar-edit');
    }
    public function update2(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4|max:30',
            'username' => ['required', 'min:4', 'max:20', 'regex:/^\S+$/', Rule::unique('pakars')->ignore(Auth::guard('pakar')->user()->id),],
            'no_telepon' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'instansi' => 'required',
            'alamat_instansi' => 'required',
        ], ['username.regex' => 'username tidak boleh spasi']);

        Auth::guard('pakar')->user()->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'pekerjaan' => $request->pekerjaan,
            'instansi' => $request->instansi,
            'alamat_instansi' => $request->alamat_instansi,
        ]);
        return redirect('/profilepakar')->with('success', 'Profil Berhasil Diperbarui');
        // Auth::guard('pakar')->id()
    }

    // edit profil admin
    public function index3()
    {
        return view('admin/profileadmin-edit');
    }

    public function update3(Request $request)
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
