<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return "Nama Saya <b>Muhammad Rhosyid Akhmad</b>";
});

Route::get('/utama/test', [UtamaController::class, "test"]);
