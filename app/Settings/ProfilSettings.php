<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ProfilSettings extends Settings
{
    public string $visi;
    public array $misi;
    public string $tentang_ppid;
    public array $tugas_fungsi;
    public array $wewenang;
    public array $tim_pertimbangan;
    public ?string $struktur_organisasi_image;

    public static function group(): string
    {
        return 'profil';
    }
}
