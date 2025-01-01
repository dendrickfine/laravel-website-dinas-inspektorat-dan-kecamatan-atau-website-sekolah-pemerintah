<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    use HasFactory;

    protected $table = 'iklan'; // Nama tabel
    protected $primaryKey = 'id_iklan'; // Primary key
    public $incrementing = false; // Jika primary key bukan auto increment
    protected $keyType = 'string'; // Tipe data primary key


    protected $fillable = [
        'id_iklan','judul','link','gambar_iklan','status'
    ];

    protected $hidden = [];

}
