<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KaryawanAsliController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlipgajiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KirimSlipController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/karyawan', [KaryawanAsliController::class, 'index'])->middleware('auth');

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/kirimslip', [KirimSlipController::class, 'index'])->middleware('auth');
Route::get('/slipgaji', [SlipgajiController::class, 'index'])->middleware('auth');

Route::delete('/slipgaji/{id}/{slipgaji_id}', [SlipgajiController::class, 'destroy'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/profil/{id}', [KaryawanAsliController::class, 'profil'])->middleware('auth');

Route::get('/slipgaji/{id}', [KaryawanAsliController::class, 'slipgaji'])->middleware('auth');

Route::post('/kirimslip', [KirimSlipController::class, 'store'])->name('slipgaji.store');

Route::get('/profil/{id}/edit', [KaryawanAsliController::class, 'edit']);
Route::patch('/profil/{id}', [KaryawanAsliController::class, 'update']);