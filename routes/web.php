<?php

use Illuminate\Support\Facades\Route;

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
