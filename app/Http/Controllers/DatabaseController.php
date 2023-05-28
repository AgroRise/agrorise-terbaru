<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function index()
    {
        return view('database.database');
    }
    public function show1()
    {
        $data = User::orderBy('id', 'asc')->paginate(1);
        return view('database.admin-user')->with('data', $data);
    }
    public function show2()
    {
        $data = Pakar::orderBy('id', 'asc')->paginate(5);
        return view('database.database')->with('data', $data);
    }
}
