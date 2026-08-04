<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformasiPublik extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'file_pdf',
        'link_tautan',
        'jenis_tautan',
    ];
}
