<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RiwayatPendidikanController;
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
    return view('home');
});

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function (){
    Route::get('/', 'index');
    Route::get('/store', 'indexStore');
    Route::post('/store', 'store');
    Route::get('/update/{id}', 'indexUpdate');
    Route::post('/update/{id}', 'update');
    Route::get('/delete/{id}', 'delete');
});

Route::controller(RiwayatPendidikanController::class)->prefix('riwayat-pendidikan')->group(function (){
    Route::get('/{mhs_id}', 'index');
    Route::get('/store/{mhs_id}', 'indexStore');
    Route::post('/store/{mhs_id}', 'store');
});

