@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Registration Forms</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover table-responsive">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Alamat KTP</th>
                <th>Alamat Lengkap Saat Ini</th>
                <th>Kecamatan </th>
                <th>Kabupaten</th>
                <th>Propinsi</th>
                <th>Nomor Telepon</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Kewarganegaraan</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status Menikah</th>
                <th>Agama</th>
            </tr>
        </thead>
        <tbody>+
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_lengkap }}</td>
                        <td class="align-middle">{{ $rs->alamat_ktp }}</td>
                        <td class="align-middle">{{ $rs->alamat_lengkap_saat_ini }}</td>
                        <td class="align-middle">{{ $rs->kecamatan }}</td>
                        <td class="align-middle">{{ $rs->kabupaten }}</td>
                        <td class="align-middle">{{ $rs->propinsi }}</td>
                        <td class="align-middle">{{ $rs->nomor_telepon }}</td>
                        <td class="align-middle">{{ $rs->nomor_hp }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->kewarganegaraan }}</td>
                        <td class="align-middle">{{ $rs->tanggal_lahir }}</td>
                        <td class="align-middle">{{ $rs->tempat_lahir }}</td>
                        <td class="align-middle">{{ $rs->jenis_kelamin }}</td>
                        <td class="align-middle">{{ $rs->status_menikah }}</td>
                        <td class="align-middle">{{ $rs->agama }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection