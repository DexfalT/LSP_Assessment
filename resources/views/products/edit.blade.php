@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Edit Registration Form</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $product->nama_lengkap }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat KTP</label>
                <input type="text" name="alamat_ktp" class="form-control" placeholder="Alamat KTP" value="{{ $product->alamat_ktp }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat Lengkap Saat Ini</label>
                <input type="text" name="alamat_lengkap_saat_ini" class="form-control" placeholder="Alamat Lengkap Saat Ini" value="{{ $product->alamat_lengkap_saat_ini }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $product->kecamatan }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="{{ $product->kabupaten }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Propinsi</label>
                <input type="text" name="propinsi" class="form-control" placeholder="Propinsi" value="{{ $product->propinsi }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon" value="{{ $product->nomor_telepon }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" name="nomor_hp" class="form-control" placeholder="Nomor HP" value="{{ $product->nomor_hp }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $product->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan" value="{{ $product->kewarganegaraan }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $product->tanggal_lahir }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $product->tempat_lahir }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="{{ $product->jenis_kelamin }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Status Menikah</label>
                <input type="text" name="status_menikah" class="form-control" placeholder="Status Menikah" value="{{ $product->status_menikah }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ $product->agama }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
