<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Pakar;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatabaseController extends Controller
{
    public function index()
    {
        return view('database.database-pakar');
    }
    public function show1()
    {
        $data = User::orderBy('id', 'asc')->paginate(5);
        return view('database.database-user')->with('data', $data);
    }
    public function show2()
    {
        $data = Pakar::orderBy('id', 'asc')->paginate(5);
        return view('database.database-pakar', compact('data'));
    }
    public function show3()
    {
        $data = Course::orderBy('id', 'asc')->paginate(5);
        return view('database.pengajuan-course', compact('data'));
    }
}
