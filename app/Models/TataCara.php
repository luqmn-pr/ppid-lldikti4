<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TataCara extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'judul_langkah',
        'deskripsi_langkah',
        'icon',
        'urutan',
    ];
}
