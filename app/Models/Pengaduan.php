<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan'; // Nama tabel
    protected $primaryKey = 'id_pengaduan'; // Primary key
    public $incrementing = false; // Jika primary key bukan auto increment
    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable =[
        'id_pengaduan','nama','slug','nik','alamat','email','nomor_telepon','instansi','isi','gambar_bukti'
    ];

    protected $hidden =[];

    
}
