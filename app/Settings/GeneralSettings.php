<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $alamat_kantor;
    public string $waktu_pelayanan;
    public string $kontak_telepon;
    public string $kontak_whatsapp;
    public string $email_resmi;
    public string $url_lapor;
    
    public string $url_instagram;
    public string $url_tiktok;
    public string $url_youtube;
    public string $url_facebook;

    public string $footer_description;
    public ?string $maklumat_image;
    
    public ?string $site_logo;
    public ?string $favicon;
    
    public ?string $file_form_permohonan;
    public ?string $file_form_keberatan;
    public ?string $file_daftar_informasi_publik;

    public static function group(): string
    {
        return 'general';
    }
}
