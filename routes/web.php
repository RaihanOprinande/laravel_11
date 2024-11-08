<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})-> middleware('auth');

Route::fallback(function(){
    return view('not_found');
});

Route::get('/register',[RegisterController::class,'index']);
Route::get('/mahasiswa',[DashboardMahasiswaController::class,'index'])-> middleware('admin');
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/dashboard-mahasiswa',[DashboardController::class,'mahasiswa']);
Route::get('/dashboard-dosen',[DashboardController::class,'dosen']);
Route::get('/dashboard-prodi',[DashboardController::class,'prodi']);
Route::get('/dashboard-user',[DashboardController::class,'user']);
Route::get('/dashboard-jabatan',[DashboardController::class,'jabatan']);
Route::get('/cetak-pdf',[MahasiswaController::class,'cetakpdf']);
Route::get('/cetak-jbt',[JabatanController::class,'cetakpdf']);
Route::get('/login',[LoginController::class,'index']) -> name('login');

Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/register',[RegisterController::class,'store']);

Route::resource('/user',UserController::class);
Route::resource('/mhs-index',MahasiswaController::class) -> middleware('auth');
Route::resource('/prd-index',ProdiController::class) -> middleware('auth');
Route::resource('/dsn-index',DosenController::class) ->middleware('auth');
Route::resource('/jbt-index',JabatanController::class) ->middleware('auth');





