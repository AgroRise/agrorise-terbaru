<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPakarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PakarController;
use App\Http\Controllers\PasswordAdminController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PasswordPakarController;
use App\Http\Controllers\PestisidaController;
use App\Http\Controllers\SigninadminController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SigninpakarController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SignuppakarController;
use App\Http\Controllers\UserController;
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



Route::get('/keuntungan', function () {return view('kalkulator/keuntungan');});

route::post('/logout',[SigninController::class, 'logout']);

route::post('/logout',[SigninpakarController::class, 'logout']);

route::get('/',[DashboardController::class, 'index']);

route::group(['middleware' => ['auth:user,pakar,admin']], function(){
    Route::get('/pestisida', function () {return view('kalkulator/pestisida');});
    Route::get('/pupuk-urea', function () {return view('kalkulator/pupuk-urea');});
    Route::get('/pupuk-kotoran-ayam', function () {return view('kalkulator/kotoran-ayam');});
    Route::get('/pupuk-SP-36', function () {return view('kalkulator/SP-36');});
    Route::get('/profile', function () {return view('user/profile');});
    Route::get('/profilepakar', function () {return view('pakar/profilepakar');});
    Route::get('/profileadmin', function () {return view('admin/profileadmin');});
    route::get('/edit-pakar',[PakarController::class, 'index']);
    route::put('/update-pakar',[PakarController::class, 'update']);
    route::get('/edit-user',[UserController::class, 'index']);
    route::put('/update-user',[UserController::class, 'update']);
    route::get('/edit-admin',[AdminController::class, 'index']);
    route::put('/update-admin',[AdminController::class, 'update']);
    route::get('/edit-password-user',[PasswordController::class, 'index']);
    route::put('/update-password-user',[PasswordController::class, 'update']);
    route::get('/edit-password-pakar',[PasswordPakarController::class, 'index']);
    route::put('/update-password-pakar',[PasswordPakarController::class, 'update']);
    route::get('/edit-password-admin',[PasswordAdminController::class, 'index']);
    route::put('/update-password-admin',[PasswordAdminController::class, 'update']);
    route::get('/file',[AdminController::class, 'user']);
    route::get('/filepakar',[AdminController::class, 'pakar']);
    // route::get('/signin',[AdminController::class, 'index']);
});

route::group(['middleware' => ['guest:user,pakar,admin']], function(){
    Route::get('/mulai', function () {return view('main');});
    Route::get('/daftar', function () {return view('signupmain');});
    route::get('/signin',[SigninController::class, 'index']);
    route::post('/signin',[SigninController::class, 'login']);
    route::get('/signin-pakar',[SigninpakarController::class, 'index']);
    route::post('/signin-pakar',[SigninpakarController::class, 'login']);
    route::get('/signin-admin',[SigninadminController::class, 'index']);
    route::post('/signin-admin',[SigninadminController::class, 'login']);
    route::get('/signup',[SignupController::class, 'index']);
    route::post('/signup',[SignupController::class, 'store']);
    route::get('/signup-pakar',[SignuppakarController::class, 'index']);
    route::post('/signup-pakar',[SignuppakarController::class, 'store']);
    route::post('/admin-pakar',[AdminPakarController::class, 'index']);
    Route::get('/login', function () {return view('mainlogin');})->name('login');
    // route::post('/signin',[AdminController::class, 'index']);
});





// route::get('/admin',[AdminController::class, 'index']);
// route::get('/admin-pakar',[AdminPakarController::class, 'index']);

// route::get('/file',[AdminPakarController::class, 'file']);
// route::get('/signin-pakar',[AdminController::class, 'login']);