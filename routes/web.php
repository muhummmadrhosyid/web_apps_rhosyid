<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('registrasi.form');
});

Route::get("/home", [HomeController::class, "index"]);

Route::get("/registrasi/form", [RegistrasiController::class, "registrasi"])->name("regis_form");
Route::post("/registrasi/proses", [RegistrasiController::class, "proses"])->name("regis_proses");
