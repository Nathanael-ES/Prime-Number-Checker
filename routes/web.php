<?php

use App\Http\Controllers\PrimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrimeController::class, 'index'])->name('prime');
Route::post('/prime/check', [PrimeController::class, 'check'])->name('prime.check');
