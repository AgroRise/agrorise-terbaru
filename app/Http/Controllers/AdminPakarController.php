<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use Illuminate\Http\Request;

class AdminPakarController extends Controller
{
    public function index(){
        $data = Pakar::orderBy('id', 'asc')->paginate(1);
        return view('admin-pakar')->with('data', $data);
    }
    public function file(){
        file_cv = $request

        // $data = Pakar::
        return view('file')->with('file'$data);
    }
}
