<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('profil.tentang_ppid', 'Keterbukaan informasi publik merupakan bagian penting dari upaya mewujudkan tata kelola pemerintahan yang baik, transparan, dan akuntabel. Sebagai bentuk pelaksanaan amanat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Lembaga Layanan Pendidikan Tinggi (LLDikti) Wilayah IV menyelenggarakan pelayanan informasi publik melalui Pejabat Pengelola Informasi dan Dokumentasi (PPID).');
        
        $this->migrator->add('profil.wewenang', [
            ['teks' => 'Menugaskan tim kerja untuk membuat, mengelola, memelihara, dan/atau memutakhirkan Daftar Informasi Publik.'],
            ['teks' => 'Menetapkan Daftar Informasi Publik.'],
            ['teks' => 'Mengusulkan Informasi yang dikecualikan kepada PPID Utama Kementerian.']
        ]);
        
        $this->migrator->add('profil.tim_pertimbangan', [
            ['teks' => 'Menangani keberatan awal sebelum sengketa berlanjut ke Komisi Informasi.'],
            ['teks' => 'Menyusun pertimbangan tertulis mengenai dampak pengecualian informasi dalam Pengujian Konsekuensi.']
        ]);
    }
};
