<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('kategoris', KategoriController::class);

Route::apiResource('bukus', BukuController::class);

Route::get('bukus/kategori/{kategori_id}', [BukuController::class, 'searchByKategori']);

Route::get('bukus/judul/{judul}', [BukuController::class, 'searchByJudul']);