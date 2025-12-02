<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    // index view
    public function index()
    {
        $mhs = DB::table('mhs')->get();
        return view('admin.mhs.index', ['mhs' => $mhs]);
    }

    // add // tambah
    public function tambah(){
        return view('admin.mhs.tambah');
    }

    // simpan
    public function store(Request $request){
        
        // validasi
        $request->validate([
            'Nama' => 'required',
            'Jabatan' => 'required',
            'Umur' => 'required|integer',
            'Alamat' => 'required',
            'Foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // upload foto
        $fotoPath = null;
        if ($request->hasFile('Foto')) {
            $fotoPath = $request->file('Foto')->store('mhs_foto', 'public');
        }

        // insert data 
        DB::table('mhs')->insert([
            'mhs_nama' => $request->Nama,
            'mhs_jabatan' => $request->Jabatan,
            'mhs_umur' => $request->Umur,
            'mhs_alamat' => $request->Alamat,
            'mhs_foto' => $fotoPath
        ]);

        return redirect('/mhs')->with('success','Data berhasil ditambahkan');
    }

    // form edit 
    public function edit ($id){
        $mhs = DB::table('mhs')->where('mhs_id', $id)->first();
        return view('admin.mhs.edit', ['mhs'=> $mhs]);
    }

    // update
    public function update (Request $request, $id){

        $request->validate([
            'Nama' => 'required',
            'Jabatan' => 'required',
            'Umur' => 'required|integer',
            'Alamat' => 'required',
            'Foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // ambil data lama
        $old = DB::table('mhs')->where('mhs_id', $id)->first();

        // upload foto baru
        $fotoPath = $old->mhs_foto; // default pakai foto lama

        if ($request->hasFile('Foto')) {

            // hapus foto lama kalau ada
            if ($old->mhs_foto) {
                Storage::disk('public')->delete($old->mhs_foto);
            }

            // upload foto baru
            $fotoPath = $request->file('Foto')->store('mhs_foto', 'public');
        }

        // update data
        DB::table('mhs')->where('mhs_id', $id)->update([
            'mhs_nama' => $request->Nama,
            'mhs_jabatan' => $request->Jabatan,
            'mhs_umur' => $request->Umur,
            'mhs_alamat' => $request->Alamat,
            'mhs_foto' => $fotoPath
        ]);

        return redirect('/mhs')->with('success', 'Data berhasil diupdate');
    }

    // hapus
    public function hapus($id){

        // ambil data
        $mhs = DB::table('mhs')->where('mhs_id', $id)->first();

        // hapus foto bila ada
        if ($mhs->mhs_foto) {
            Storage::disk('public')->delete($mhs->mhs_foto);
        }

        DB::table('mhs')->where('mhs_id', $id)->delete();

        return redirect('/mhs')->with('success', 'Data berhasil dihapus');
    }
}
