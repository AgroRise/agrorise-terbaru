<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PestisidaController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SigninpakarController;
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



Route::get('/keuntungan', function () {return view('keuntungan');});

route::post('/logout',[SigninController::class, 'logout']);

route::post('/logout',[SigninpakarController::class, 'logout']);

route::get('/',[DashboardController::class, 'index']);

route::group(['middleware' => ['auth:user,pakar']], function(){
    Route::get('/pestisida', function () {return view('pestisida');});
});

route::group(['middleware' => ['guest:user,pakar']], function(){
    Route::get('/mulai', function () {return view('main');});
    Route::get('/daftar', function () {return view('signupmain');});
    route::get('/signin',[SigninController::class, 'index']);
    route::post('/signin',[SigninController::class, 'login']);
    route::get('/signin-pakar',[SigninpakarController::class, 'index']);
    route::post('/signin-pakar',[SigninpakarController::class, 'login']);
    route::get('/signup',[SignupController::class, 'index']);
    route::post('/signup',[SignupController::class, 'store']);
    route::get('/signup-pakar',[SignuppakarController::class, 'index']);
    route::post('/signup-pakar',[SignuppakarController::class, 'store']);
    Route::get('/profile', function () {return view('profile');});
    Route::get('/profilepakar', function () {return view('profilepakar');});
    Route::get('/login', function () {return view('mainlogin');})->name('login');
});



