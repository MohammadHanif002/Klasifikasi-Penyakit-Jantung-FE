<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('homepage');
});


// Route::get('/', [PasienController::class, 'form']);
Route::get('/pasien', [PasienController::class, 'form'])->name('pasien.form');
Route::post('/pasien/predict', [PasienController::class, 'predict'])->name('pasien.predict');