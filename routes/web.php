<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;

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

Route::get('/kakak', function () {
    return view('index');
});



Route::get('/' ,[AuthController::class,'index'])->name('home');
//Route::get('/login' ,[AuthController::class,'login'])->name('login'); 
Route::get('/register' ,[AuthController::class,'register'])->name('register'); 
Route::post('/register' ,[AuthController::class,'registerStore'])->name('registerPost'); 
Route::post('/login' ,[AuthController::class,'loginStore'])->name('loginPost'); 
Route::post('/logout' ,[AuthController::class,'logout'])->name('logout'); 


Route::middleware(['guest'])->group(function (){
    Route::get('/login', [SesiController::class,'index'])->name('login');
    Route::post('/login', [SesiController::class,'login']);
});

Route::get('/home', function(){
    return redirect('/dashboard');

});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard' ,[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/admin/operator', [AdminController::class,'operator'])->middleware('userAkses:operator');
    Route::get('/admin/dosen', [AdminController::class,'dosen'])->middleware('userAkses:dosen');
    Route::get('/admin/mahasiswa', [AdminController::class,'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/logout', [SesiController::class,'logout']);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/dosen', DosenController::class);
    Route::resource('/matakuliah', MatakuliahController::class);
    Route::get('/dashboard' ,[HomeController::class,'dashboard'])->name('dashboard');

});