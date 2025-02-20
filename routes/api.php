<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/resep', [ResepController::class, 'index']);
Route::post('/resep', [ResepController::class, 'store']);
Route::get('/obat', [ObatController::class, 'index']);
