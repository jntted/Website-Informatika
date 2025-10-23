<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

//admin
Route::get('/admin', function () {
    return view('admin.mahasiswa.index');
});

//pegawai
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);