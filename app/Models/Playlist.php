<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'playlist';

    protected $fillable = [
    'id_playlist','judul_playlist','slug','deskripsi','id_user','gambar_playlist','is_active' 
    ];

    protected $hidden = [];

    public function users()
    {
        return $this-> belongsTo(User::class, 'id_user', 'id_user');
    }
}
