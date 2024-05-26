<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KaryawanAsliController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/karyawan', [KaryawanAsliController::class, 'index']);

Route::get('/', function () {
    return redirect('/login');
});
