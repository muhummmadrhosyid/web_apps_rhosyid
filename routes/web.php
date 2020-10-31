<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/nama', function () {
    return "Nama : <b>Muhammad Rhosyid Akhmad</b>";
});
Route::get('/nim', function () {
    return "Nim : <b>1811102441067</b>";
});
Route::get('/fakultas', function () {
    return "Fakultas : <b>Sains dan Teknologi</b>";
});
Route::get('/program-studi', function () {
    return "Program Studi : <b>Teknik Informatika</b>";
});
Route::get('/pembimbing', function () {
    return "Dosen Pembimbing : <b>Rudiman, S.Kom., M.Cs</b>";
});


Route::get('/test1/view1', [HomeController::class, "test1"]);
Route::get('/test2/view2', [HomeController::class, "test2"]);
Route::get('/test3/view3', [HomeController::class, "test3"]);
Route::get('/test4/view4', [AboutController::class, "test4"]);
Route::get('/test5/view5', [AboutController::class, "test5"]);
Route::get('/test6/view6', [AboutController::class, "test6"]);
