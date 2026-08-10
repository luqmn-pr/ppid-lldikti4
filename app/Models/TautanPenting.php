<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TautanPenting extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_tautan',
        'url_tautan',
        'urutan',
    ];
}
