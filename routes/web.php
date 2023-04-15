<?php

use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SignuppakarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('loginmain');
});

// Route::get('/pakar', function () {
//     return view('login');
// });

Route::get('/pakar', function () {
    return view('sesi/pakar');
});

// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('home', function () {
//     return view('home/index');
// });

route::get('/signin',[SigninController::class, 'index']);
route::post('/signin',[SigninController::class, 'login']);

route::get('/signup',[SignupController::class, 'index']);
route::post('/signup',[SignupController::class, 'store']);

route::get('/pakar',[SignuppakarController::class, 'index']);
route::post('/pakar',[SignuppakarController::class, 'store']);

