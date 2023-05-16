<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PakarController extends Controller
{
    public function index()
    {
        return view('pakar/profilepakar-edit');
    }

    public function update(Request $request)
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
}
// 'required|min:4|max:20|unique:pakars',