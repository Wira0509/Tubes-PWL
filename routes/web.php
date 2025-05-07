<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Menampilkan form login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Mengirimkan data login
Route::post('/', [AuthController::class, 'login'])->name('login.submit');
