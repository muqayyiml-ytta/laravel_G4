<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});
//route dgn value
Route::get('/hello', function () {
    return "assalamualaikum warahmatullahi wabarakatuh" ;
});
//route dgn parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//
Route::get('/kabar', function () {
    return view('p3.kondisi');
});

//router suercontroller
Route::get("/user",[UserController::class, 'index']);

//router santricontroller
Route::get("/santri",[SantriController::class, 'datasantri']);

//tugas1
Route::get('/profil', [ProfilController::class, 'index']);

//tugas2
Route::get('/produk', [ProdukController::class, 'index']);

//tugas3
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);