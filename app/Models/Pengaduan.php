<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table= 'pengaduan';

    protected $fillable =[
        'id_pengaduan','nama','slug','nik','alamat','email','nomor_telepon','instansi','isi','gambar_bukti'
    ];

    protected $hidden =[];

    
}
