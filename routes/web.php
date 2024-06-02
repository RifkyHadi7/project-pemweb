<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\KaryawanAsliController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlipgajiController;
use App\Http\Controllers\ProfileController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/karyawan', [KaryawanAsliController::class, 'index']);

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/slipgaji', [SlipgajiController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');