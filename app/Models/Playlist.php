<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'playlist'; // Nama tabel
    protected $primaryKey = 'id_playlist'; // Primary key
    public $incrementing = false; // Jika primary key bukan auto increment
    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable = [
    'id_playlist','judul_playlist','slug','deskripsi','id_user','gambar_playlist','is_active' 
    ];

    protected $hidden = [];

    public function users()
    {
        return $this-> belongsTo(User::class, 'id_user', 'id_user');
    }
}
