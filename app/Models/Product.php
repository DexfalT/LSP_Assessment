<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'nama_lengkap',
        'alamat_ktp',
        'alamat_lengkap_saat_ini',
        'kecamatan',
        'kabupaten',
        'propinsi',
        'nomor_telepon',
        'nomor_hp',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];
}
