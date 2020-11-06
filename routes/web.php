<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\logoutController;


Route::get('/', function () {
    return view('welcome');
});


Route::get("/home", [HomeController::class, "index"]);
Route::get("/about", [AboutController::class, "test"]);
Route::get("/konten", [KontenController::class, "test"]);
Route::get("/logout", [LogoutController::class, "test"]);
