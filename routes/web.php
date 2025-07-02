<?php
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('kategori', App\Http\Controllers\KategoriController::class);
Route::resource('penerbit', App\Http\Controllers\PenerbitController::class);
Route::resource('buku', App\Http\Controllers\BukuController::class);

