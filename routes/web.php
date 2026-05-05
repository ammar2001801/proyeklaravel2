<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurikulumControllerAmmar;
use App\Http\Controllers\KelasControllerAmmar;
use App\Http\Controllers\JadwalControllerAmmar;
use App\Http\Controllers\NilaiControllerAmmar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kurikulum-ammar', [KurikulumControllerAmmar::class, 'index']);
Route::get('/kelas-ammar', [KelasControllerAmmar::class, 'index']);
Route::get('/jadwal-ammar', [JadwalControllerAmmar::class, 'index']);
Route::get('/nilai-ammar', [NilaiControllerAmmar::class, 'index']);