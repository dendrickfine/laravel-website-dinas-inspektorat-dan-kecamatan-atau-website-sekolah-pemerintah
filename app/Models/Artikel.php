<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $primaryKey = 'id_artikel';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_artikel',
        'judul',
        'slug',
        'id_kategori',
        'id_user',
        'gambar_artikel',
        'is_active',
        'views',
        'body'
    ];

    protected $hidden = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
