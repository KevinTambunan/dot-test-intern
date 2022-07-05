<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// karyawan
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index']);
Route::get('/karyawan/create', [App\Http\Controllers\KaryawanController::class, 'create']);
Route::post('/karyawan/store', [App\Http\Controllers\KaryawanController::class, 'store']);
Route::get('/karyawan/destroy/{id}', [App\Http\Controllers\KaryawanController::class, 'destroy']);
Route::post('/karyawan/update/{id}', [App\Http\Controllers\KaryawanController::class, 'update']);

// perusaaan
Route::get('/perusahaan', [App\Http\Controllers\PerusahaanController::class, 'index']);
Route::get('/perusahaan/create', [App\Http\Controllers\PerusahaanController::class, 'create']);
Route::post('/perusahaan/store', [App\Http\Controllers\PerusahaanController::class, 'store']);
Route::get('/perusahaan/destroy/{id}', [App\Http\Controllers\PerusahaanController::class, 'destroy']);
Route::get('/perusahaan/detail/{id}', [App\Http\Controllers\PerusahaanController::class, 'detail']);
Route::post('/perusahaan/update/{id}', [App\Http\Controllers\PerusahaanController::class, 'update']);
