<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slide';
    protected $fillable = [
        'id_slide','judul_slide','link','gambar_slide','status'
    ];
    protected $hidden = [];
}
