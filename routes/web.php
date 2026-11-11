<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::resource('buku', BukuController::class)->except('show');