<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.alamat_kantor', 'Jl. P.H.H. Mustofa No.38, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124');
        $this->migrator->add('general.waktu_pelayanan', 'Senin – Kamis: 07.30 – 16.00 WIB | Jumat: 07.30 – 16.30 WIB');
        $this->migrator->add('general.kontak_telepon', '(022) 7275630');
        $this->migrator->add('general.kontak_whatsapp', '082244121226');
        $this->migrator->add('general.email_resmi', 'informasi@lldikti4.id');
        $this->migrator->add('general.url_lapor', 'https://www.lapor.go.id/');
        
        $this->migrator->add('general.url_instagram', 'https://www.instagram.com/lldiktiwilayah4?utm_medium=copy_link');
        $this->migrator->add('general.url_tiktok', 'https://www.tiktok.com/@lldiktiwilayah4');
        $this->migrator->add('general.url_youtube', 'https://www.youtube.com/@LLDIKTIWilayahIV');
        $this->migrator->add('general.url_facebook', 'https://www.facebook.com/lldiktiwilayah4');
        $this->migrator->add('general.url_map', 'https://www.google.com/maps/place/LLDIKTI+Wilayah+IV/@-6.896444,107.6333816,15z/data=!4m6!3m5!1s0x2e68e7bdf22c8919:0xacef29aa22f49986!8m2!3d-6.8992448!4d107.6377182!16s%2Fg%2F1hc36rtm3?entry=ttu&g_ep=EgoyMDI2MDgwMi4wIKXMDSoASAFQAw%3D%3D');

        $this->migrator->add('general.footer_description', 'Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV memfasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di Provinsi Jawa Barat dan Banten.');
        $this->migrator->add('general.maklumat_image', 'Maklumat-Pelayanan-PAKTA-INTEGRITAS-2025-REV-1.png');
    }
};
