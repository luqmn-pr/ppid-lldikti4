<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('profil.tentang_ppid', 'Keterbukaan informasi publik merupakan bagian penting dari upaya mewujudkan tata kelola pemerintahan yang baik, transparan, dan akuntabel. Sebagai bentuk pelaksanaan amanat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Lembaga Layanan Pendidikan Tinggi (LLDikti) Wilayah IV menyelenggarakan pelayanan informasi publik melalui Pejabat Pengelola Informasi dan Dokumentasi (PPID).');
        
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
        
        $this->migrator->add('profil.wewenang', [
            ['teks' => 'Menugaskan tim kerja untuk membuat, mengelola, memelihara, dan/atau memutakhirkan Daftar Informasi Publik.'],
            ['teks' => 'Menetapkan Daftar Informasi Publik.'],
            ['teks' => 'Mengusulkan Informasi yang dikecualikan kepada PPID Utama Kementerian.']
        ]);
        
        $this->migrator->add('profil.tim_pertimbangan', [
            ['teks' => 'Menangani keberatan awal sebelum sengketa berlanjut ke Komisi Informasi.'],
            ['teks' => 'Menyusun pertimbangan tertulis mengenai dampak pengecualian informasi dalam Pengujian Konsekuensi.']
        ]);
        
        $this->migrator->add('profil.struktur_organisasi_image', '');
    }
};
