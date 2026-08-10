<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('profil.visi', 'Menjadi Lembaga Layanan Pendidikan Tinggi yang Unggul dalam Memfasilitasi Peningkatan Mutu Penyelenggaraan Pendidikan Tinggi di Jawa Barat dan Banten.');
        $this->migrator->add('profil.misi', [
            ['teks' => 'Meningkatkan mutu kelembagaan dan sumber daya pendidikan tinggi.'],
            ['teks' => 'Meningkatkan mutu pembelajaran dan kemahasiswaan.'],
            ['teks' => 'Meningkatkan mutu penelitian dan pengabdian kepada masyarakat.']
        ]);
        $this->migrator->add('profil.tugas_fungsi', [
            ['teks' => 'Pelaksanaan pemetaan mutu pendidikan tinggi.'],
            ['teks' => 'Pelaksanaan fasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi.'],
            ['teks' => 'Pelaksanaan fasilitasi peningkatan mutu pengelolaan perguruan tinggi.'],
            ['teks' => 'Pelaksanaan evaluasi dan pelaporan fasilitas peningkatan mutu perguruan tinggi.']
        ]);
        $this->migrator->add('profil.struktur_organisasi_image', '');
    }
};
