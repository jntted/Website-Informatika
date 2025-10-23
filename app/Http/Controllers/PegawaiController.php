<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PegawaiController extends Controller
{
    // index view
    public function index()
    {
        // ambil db table pegawai
        // select * from pegawai

        $pegawai = DB::table('pegawai')-> get();
        return view('admin.pegawai.index',['pegawai'=> $pegawai]);
    }

    // add // tambah
    public function tambah(){
        // memanggil tambah
        return view('admin.pegawai.tambah');
    }

    // simpan
    public function store(Request $request){
        // insert data 
        DB::table('pegawai')->insert(
            [
            'pegawai_nama'=> $request->Nama,
            'pegawai_jabatan'=>$request->Jabatan,
            'pegawai_umur'=>$request->Umur,
            'pegawai_alamat'=>$request->Alamat
            ]
            );
    
    //alihkan
    return redirect('/pegawai');}


    // update

    // hapus

    // pdf

}
