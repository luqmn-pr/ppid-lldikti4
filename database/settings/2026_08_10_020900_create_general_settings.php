<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.alamat_kantor', 'Jl. P.H.H. Mustofa No.38, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124');
        $this->migrator->add('general.waktu_pelayanan', 'Senin - Kamis: 07.30 - 16.00 WIB | Jumat: 07.30 - 16.30 WIB');
        $this->migrator->add('general.kontak_telepon', '(022) 7275630');
        $this->migrator->add('general.kontak_whatsapp', '082244121226');
        $this->migrator->add('general.email_resmi', 'informasi@lldikti4.id');
        $this->migrator->add('general.url_lapor', 'https://www.lapor.go.id/');
        
        $this->migrator->add('general.url_instagram', 'https://www.instagram.com/lldiktiwilayah4?utm_medium=copy_link');
        $this->migrator->add('general.url_tiktok', 'https://www.tiktok.com/@lldiktiwilayah4');
        $this->migrator->add('general.url_youtube', 'https://www.youtube.com/@LLDIKTIWilayahIV');
        $this->migrator->add('general.url_facebook', 'https://www.facebook.com/lldiktiwilayah4');

        $this->migrator->add('general.footer_description', 'Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV memfasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di Provinsi Jawa Barat dan Banten.');
        $this->migrator->add('general.maklumat_image', 'Maklumat-Pelayanan-PAKTA-INTEGRITAS-2025-REV-1.png');
        
        $this->migrator->add('general.file_form_permohonan', null);
        $this->migrator->add('general.file_form_keberatan', null);
        $this->migrator->add('general.file_daftar_informasi_publik', null);
    }
};
