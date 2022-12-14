<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('store-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/read', [MahasiswaController::class, 'read']);
Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/edit', [MahasiswaController::class, 'edit']);


Route::get('/', function () {
    return view('welcome');
});
