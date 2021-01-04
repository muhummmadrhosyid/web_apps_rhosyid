<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\KategoriController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', function () {
    return view('kategori.index');
});

Route::get("/home", [HomeController::class, "index"]);

Route::get("/registrasi/form", [RegistrasiController::class, "registrasi"])->name("regis_form");
Route::post("/registrasi/proses", [RegistrasiController::class, "proses"])->name("regis_proses");

Route::get("/kategori/all", [KategoriController::class, "index"])->name("kategori_index");
Route::get("/kategori/tambah", [KategoriController::class, "tambah"])->name("kategori_tambah");
Route::post("/kategori/simpan", [KategoriController::class, "simpan"])->name("kategori_simpan");
