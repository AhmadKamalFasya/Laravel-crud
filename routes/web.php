<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahsiswaController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/detail/{dosen_id}', [DosenController::class, 'detail']);
Route::get('/dosen/add', [DosenController::class, 'add']);
Route::post('/dosen/insert', [DosenController::class, 'insert']);
Route::get('/dosen/edit/{dosen_id}', [DosenController::class, 'edit']);
Route::post('/dosen/update/{dosen_id}', [DosenController::class, 'update']);
Route::get('/dosen/delete/{dosen_id}', [DosenController::class, 'delete']);

//Mahasiswa
Route::get('/mahasiswa', [MahsiswaController::class, 'index']);
