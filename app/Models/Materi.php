<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';

    protected $fillable = [
        'id_materi','judul_materi','slug','link','deskripsi','id_playlist','is_active','gambar_materi'
    ];

    protected $hidden = [];

    public function playlist(){
        return $this->belongsTo(Playlist::class, 'id_playlist', 'id_playlist');
    }
}
