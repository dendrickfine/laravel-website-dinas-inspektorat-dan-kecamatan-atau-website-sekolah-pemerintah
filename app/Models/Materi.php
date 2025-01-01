<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi'; // Nama tabel
    protected $primaryKey = 'id_materi'; // Primary key
    public $incrementing = false; // Jika primary key bukan auto increment
    protected $keyType = 'string'; // Tipe data primary key


    protected $fillable = [
        'id_materi','judul_materi','slug','link','deskripsi','id_playlist','is_active','gambar_materi'
    ];

    protected $hidden = [];

    public function playlist(){
        return $this->belongsTo(Playlist::class, 'id_playlist', 'id_playlist');
    }
}
