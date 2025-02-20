<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ObatController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/resep', [ResepController::class, 'index']);
// Route::post('/resep', [ResepController::class, 'store']);
// Route::get('/obat', [ObatController::class, 'index']);
