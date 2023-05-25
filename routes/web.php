<?php

use App\Http\Controllers\AdminPakarController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PestisidaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
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
Route::get('/tes', function () {return view('course/checkout');});

route::post('/logout',[SigninController::class, 'logout1']);

route::post('/logout',[SigninController::class, 'logout2']);

route::get('/',[DashboardController::class, 'index']);




route::get('/order',[OrderController::class, 'index']);

route::post('/checkout',[OrderController::class, 'checkout']);

route::get('/invoice/{id}',[OrderController::class, 'invoice']);



route::get('/course',[CourseController::class, 'index']);




route::group(['middleware' => ['auth:user,pakar,admin']], function(){
    Route::get('/pestisida', function () {return view('kalkulator/pestisida');});
    Route::get('/pupuk-urea', function () {return view('kalkulator/pupuk-urea');});
    Route::get('/pupuk-kotoran-ayam', function () {return view('kalkulator/kotoran-ayam');});
    Route::get('/pupuk-SP-36', function () {return view('kalkulator/SP-36');});
    Route::get('/profile', function () {return view('user/profile');});
    Route::get('/profilepakar', function () {return view('pakar/profilepakar');});
    Route::get('/profileadmin', function () {return view('admin/profileadmin');});
    route::get('/edit-pakar',[ProfileController::class, 'index2']);
    route::patch('/update-pakar',[ProfileController::class, 'update2']);
    route::get('/edit-user',[ProfileController::class, 'index1']);
    route::patch('/update-user',[ProfileController::class, 'update1']);
    route::get('/edit-admin',[ProfileController::class, 'index3']);
    route::patch('/update-admin',[ProfileController::class, 'update3']);
    route::get('/edit-password-user',[PasswordController::class, 'index1']);
    route::put('/update-password-user',[PasswordController::class, 'update1']);
    route::get('/edit-password-admin',[PasswordController::class, 'index2']);
    route::put('/update-password-admin',[PasswordController::class, 'update2']);
    route::get('/edit-password-pakar',[PasswordController::class, 'index3']);
    route::put('/update-password-pakar',[PasswordController::class, 'update3']);
    route::get('/file',[ProfileController::class, 'user']);
    route::get('/filepakar',[ProfileController::class, 'pakar']);
});

route::group(['middleware' => ['guest:user,pakar,admin']], function(){
    Route::get('/mulai', function () {return view('main');});
    Route::get('/daftar', function () {return view('signupmain');});
    route::get('/signin',[SigninController::class, 'index1']);
    route::post('/signin',[SigninController::class, 'login1']);
    route::get('/signin-pakar',[SigninController::class, 'index2']);
    route::post('/signin-pakar',[SigninController::class, 'login2']);
    route::get('/signup',[SignupController::class, 'index1']);
    route::post('/signup',[SignupController::class, 'signup1']);
    route::get('/signup-pakar',[SignupController::class, 'index2']);
    route::post('/signup-pakar',[SignupController::class, 'signup2']);
    route::post('/admin-pakar',[AdminPakarController::class, 'index']);
    Route::get('/login', function () {return view('mainlogin');})->name('login');
});

