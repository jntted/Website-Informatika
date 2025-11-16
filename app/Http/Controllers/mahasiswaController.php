<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class MahasiswaController extends Controller
{
    // index view
    public function index()
    {
        // ambil db table mhs
        // select * from mhs

        $mhs = DB::table('mhs')-> get();
        return view('admin.mhs.index',['mhs'=> $mhs]);
    }

    // add // tambah
    public function tambah(){
        // memanggil tambah
        return view('admin.mhs.tambah');
    }

    // simpan
    public function store(Request $request){
        // insert data 
        DB::table('mhs')->insert(
            [
            'mhs_nama'=> $request->Nama,
            'mhs_jabatan'=>$request->Jabatan,
            'mhs_umur'=>$request->Umur,
            'mhs_alamat'=>$request->Alamat
            ]
            );
    
    //alihkan
    return redirect('/mhs');}


    // form edit 
    public function edit ($id){

    //ambil data dari sql tabel mhs
    //select * from mhs where id

    $mhs = DB::table('mhs')->where('mhs_id',$id)->first();

    //view--> form
    return view ('admin.mhs.edit',['mhs'=> $mhs]);
    }

    // update tabel mhs dari form edit
    public function update (Request $request, $id){
        //validasi data
        $request->validate(
            [
                'Nama'=>'required|string|max:255',
                'Jabatan'=>'required|string|max:255',
                'Umur'=>'required|integer|min:18',
                'Alamat'=>'required|string|max:255',
            ]
            );
        //update ke data mhs
        DB::table('mhs')->where('mhs_id',$id)->update(
            [
                'mhs_nama'=> $request->Nama,
                'mhs_jabatan'=> $request->Jabatan,
                'mhs_umur'=> $request->Umur,
                'mhs_alamat'=> $request->Alamat,
            ]
            );
        //redirect ke halaman utama
        return redirect('/mhs')-> with('success', 'Data berhasil diupdate');
    }
    // hapus
    public function hapus($id){
        // ambil data mhs berdasarka id, 
        // SQL hapus
        DB::table('mhs')->where('mhs_id',$id)->delete();

        //alihkan ke halaman utama
        return redirect('/mhs')-> with('success', 'Data berhasil dihapus');
    }
    // pdf

}
