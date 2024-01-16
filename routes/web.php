<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix('dosen')->group(function () {
    // Route untuk halaman profil dosen
    Route::get('/profil', function () {
        return view('dosen.profil', ['message' => 'Halaman profil dosen']);
    });

    // Route untuk halaman data
    Route::get('/data', function () {
        return view('dosen.v_data', ['message' => 'Halaman data dosen']);
    });

    // Route untuk halaman data pengampu
    Route::get('/data_pengampu', function () {
        return view('dosen.v_ampu', ['message' => 'Halaman Data Mata Kuliah Yang Diampu']);});
});