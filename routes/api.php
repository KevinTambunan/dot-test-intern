<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/karyawan', [App\Http\Controllers\Api\KaryawanController::class, 'index']);
Route::get('/karyawan/detail/{id}', [App\Http\Controllers\Api\KaryawanController::class, 'detail']);
Route::get('/karyawan/destroy/{id}', [App\Http\Controllers\Api\KaryawanController::class, 'destroy']);
Route::post('/karyawan/store', [App\Http\Controllers\Api\KaryawanController::class, 'store']);
Route::post('/karyawan/update/{id}', [App\Http\Controllers\Api\KaryawanController::class, 'update']);
Route::post('/karyawan/search', [App\Http\Controllers\Api\KaryawanController::class, 'search']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
