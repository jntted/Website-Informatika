@extends('layout.admin.layout_admin')

@section('content')
<div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Pegawai</h1>
</div>

<!-- kembali -->
 <div class="d-grid gap-2 d-md-block">
    <a href = "/pegawai/">
  <button class="btn btn-primary" type="button">Kembali</button>
</a>
</div>

<!-- form -->
<form action= "/pegawai/update/{{$pegawai->pegawai_id}}" method ="POST">
    {{csrf_field()}}
  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama" name="Nama"
      value="{{$pegawai->pegawai_nama}}" required="required">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Jabatan" name="Jabatan"
      value="{{$pegawai->pegawai_jabatan}}" required="required">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="Umur" name="Umur"
      value="{{$pegawai->pegawai_umur}}" required="required">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Alamat" name="Alamat"
      value="{{$pegawai->pegawai_alamat}}" required="required">
    </div>
  </div>
<button type="submit" class="btn btn-primary">update</button>
</form>
@endsection