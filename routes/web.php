<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GajiController;
use Illuminate\Support\Facades\Route;

// Rute untuk pengunjung
Route::get('/sesi', [AuthController::class, 'login'])->name('login');
Route::get('/sesireg', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'loginreq']);
Route::post('/store', [AuthController::class, 'registerreq']);

Route::get('/home', function () {
    return redirect('/admin');
});
Route::get('/', function () {
    return view('halaman_depan.root');
});
Route::get('/admin', [AdminController::class, 'index']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk gaji
Route::resource('gaji', GajiController::class);

// Route untuk menampilkan form create gaji
