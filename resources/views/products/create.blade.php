@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Create Registration Form</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="col">
                <input type="text" name="alamat_ktp" class="form-control" placeholder="Alamat KTP">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat_lengkap_saat_ini" class="form-control" placeholder="Alamat Lengkap Saat Ini">
            </div>
            <div class="col">
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten">
            </div>
            <div class="col">
                <input type="text" name="propinsi" class="form-control" placeholder="Propinsi">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon">
            </div>
            <div class="col">
                <input type="text" name="nomor_hp" class="form-control" placeholder="Nomor HP">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kewarganegaraan" value="1" checked>
                    <label class="form-check-label" for="wni_asli">WNI Asli</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kewarganegaraan" value="2">
                    <label class="form-check-label" for="wni_keturunan">WNI Keturunan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kewarganegaraan" value="3">
                    <label class="form-check-label" for="wna">WNA</label>
                </div>
                <input type="text" name="negara_wna" class="form-control mt-2" placeholder="Negara (Jika WNA)">
            </div>
        </div>
   
        <div class="row mb-3">
            <div class="col">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Kota / Kabupaten">
            </div>
            <div class="col">
                <label for="propinsi_lahir">Propinsi Lahir</label>
                <input type="text" name="propinsi_lahir" class="form-control" placeholder="Propinsi">
            </div>
            <div class="col">
                <label for="negara_lahir">Negara Lahir (Jika di Luar Negeri)</label>
                <input type="text" name="negara_lahir" class="form-control" placeholder="Negara">
            </div>
        </div>
      
        <div class="row mb-3">
            <div class="col">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                </select>
            </div>
        </div>
       
        <div class="row mb-3">
            <div class="col">
                <label for="status_menikah">Status Menikah</label>
                <select name="status_menikah" class="form-control">
                    <option value="1">Belum Menikah</option>
                    <option value="2">Menikah</option>
                    <option value="3">Lain-lain (Janda/Duda)</option>
                </select>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col">
                <label for="agama">Agama</label>
                <select name="agama" class="form-control">
                    <option value="1">Islam</option>
                    <option value="2">Katolik</option>
                    <option value="3">Kristen</option>
                    <option value="4">Hindu</option>
                    <option value="5">Buddha</option>
                    <option value="6">Lain-lain</option>
                </select>
            </div>
        </div>
        
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection