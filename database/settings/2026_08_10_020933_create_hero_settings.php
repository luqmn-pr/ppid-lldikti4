<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('hero.title', 'DI PORTAL RESMI PPID');
        $this->migrator->add('hero.subtitle', 'LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH IV');
        $this->migrator->add('hero.description1', 'Portal ini hadir sebagai wujud nyata komitmen kami dalam menjamin keterbukaan informasi publik, memperkuat good governance, serta mempermudah akses informasi yang transparan dan akurat.');
        $this->migrator->add('hero.description2', 'Temukan informasi lengkap terkait kebijakan, layanan, serta prosedur permohonan maupun keberatan informasi publik bagi masyarakat dan seluruh pemangku kepentingan.');
        $this->migrator->add('hero.background_image', 'Background-LLDIKTI-4.jpeg');
        $this->migrator->add('hero.stats_count', '65');
        $this->migrator->add('hero.stats_label', 'Pemohon');
        $this->migrator->add('hero.stats_description', 'Tahun 2022-2025');
    }
};
