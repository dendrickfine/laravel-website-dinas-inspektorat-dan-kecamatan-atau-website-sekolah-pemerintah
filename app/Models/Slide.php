<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slide'; // Nama tabel
    protected $primaryKey = 'id_slide'; // Primary key
    public $incrementing = false; // Jika primary key bukan auto increment
    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable = [
        'id_slide','judul_slide','link','gambar_slide','status'
    ];
    protected $hidden = [];
}
