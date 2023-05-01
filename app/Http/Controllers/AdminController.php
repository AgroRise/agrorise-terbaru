<?php

namespace App\Http\Controllers;

use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){
        $data = User::orderBy('id', 'asc')->paginate(1);
        return view('admin')->with('data', $data);
    }
}
    