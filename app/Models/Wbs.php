<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wbs extends Model
{
    use HasFactory;

    protected $table= 'wbs';

    protected $fillable =[
        'id_wbs','nama_pelapor','slug','email','nip','jabatan','instansi','nomor_telepon','alamat','gambar_ktp','nama_pegawai',
        'unit_kerja','materi','jenis_pelanggaran','kerugian','permintaan','gambar_bukti'
    ];

    protected $hidden =[];
}
