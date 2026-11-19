<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('buku', BukuController::class)->except('show');
});
