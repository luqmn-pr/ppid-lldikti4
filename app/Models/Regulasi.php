<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulasi extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'sinopsis',
        'file_pdf',
        'link_tautan',
        'jenis_tautan',
        'is_active',
        'urutan',
    ];
}
