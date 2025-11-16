<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('beranda.beranda');
});

Route::get('/profil', function () {
    return view('profil.profil');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.pendidikan');
});

Route::get('/riset', function () {
    return view('riset.riset');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.mhs');
});

Route::get('/lainlain', function () {
    return view('lain_lainnya.lain');
});

//user 
Route::get('/daftar',[AuthController::class, 'registrationForm']);
Route::post('/daftar',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'loginForm']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout']);

//admin
Route::get('/admin', function () {
    return view('admin.beranda.index');
});

//pegawai
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::post('/pegawai/cari', [PegawaiController::class, 'pencarian']);


//mahasiswa
Route::get('/mhs',[MahasiswaController::class, 'index']);
Route::get('/mhs/tambah',[MahasiswaController::class, 'tambah']);
Route::post('/mhs/store',[MahasiswaController::class, 'store']);
Route::get('/mhs/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mhs/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mhs/hapus/{id}', [MahasiswaController::class, 'hapus']);