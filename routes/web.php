<?php

use App\Http\Controllers\HitungController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/pendidikan/{key}', [MahasiswaController::class, 'pendidikan']);

Route::get('/hitung', [HitungController::class, 'index']);
Route::post('/hitung/luas-persegi-panjang', [HitungController::class, 'luasPersegiPanjang']);
