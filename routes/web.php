<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjokiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdministrasiController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PelangganController::class, 'registrasi']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {

    Route::resource('penjoki', PenjokiController::class);
    Route::get('penjoki/laporan/cetak', [PenjokiController::class, 'laporan']);

    Route::resource('pelanggan', PelangganController::class);
    Route::get('pelanggan/laporan/cetak', [PelangganController::class, 'laporan']);
    Route::get('pelanggan/cari/data', [PelangganController::class, 'cari']);

    Route::resource('administrasi', AdministrasiController::class);
    Route::get('administrasi/laporan/cetak', [AdministrasiController::class, 'laporan']);
});
