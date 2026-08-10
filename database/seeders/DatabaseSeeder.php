<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@ppid.local'],
            [
                'name' => 'Admin PPID',
                'password' => bcrypt('password'),
            ]
        );

        // Test User
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        \App\Models\Regulasi::create([
            'judul' => 'UU Nomor 14 Tahun 2008',
            'sinopsis' => 'Tentang Keterbukaan Informasi Publik',
            'is_active' => true,
        ]);

        \App\Models\Regulasi::create([
            'judul' => 'PP Nomor 61 Tahun 2010',
            'sinopsis' => 'Tentang Pelaksanaan Undang-undang Keterbukaan Informasi Publik',
            'is_active' => true,
        ]);

        \App\Models\InformasiPublik::create([
            'judul' => 'Informasi Profil LLDIKTI Wilayah IV',
            'kategori' => 'setiap_saat',
            'link_tautan' => 'https://lldikti4.kemdikbud.go.e-ppid',
        ]);

        \App\Models\InformasiPublik::create([
            'judul' => 'Standar Pelayanan Publik',
            'kategori' => 'berkala',
            'link_tautan' => 'https://lldikti4.kemdikbud.go.e-ppid/standar',
        ]);

        \App\Models\InformasiPublik::create([
            'judul' => 'Pencegahan COVID-19',
            'kategori' => 'serta_merta',
            'file_pdf' => null,
        ]);
        \App\Models\Layanan::updateOrCreate(
            ['judul' => 'Halaman Berkala'],
            [
                'deskripsi' => 'Informasi yang diperbarui secara berkala',
                'url' => '/informasi-publik?tab=berkala',
                'icon' => 'ph-calendar-check',
                'is_active' => true,
                'urutan' => 1
            ]
        );

        \App\Models\Layanan::updateOrCreate(
            ['judul' => 'Informasi Tersedia Setiap Saat'],
            [
                'deskripsi' => 'Informasi yang dapat diakses kapan saja',
                'url' => '/informasi-publik?tab=setiap-saat',
                'icon' => 'ph-info',
                'is_active' => true,
                'urutan' => 2
            ]
        );

        \App\Models\Layanan::updateOrCreate(
            ['judul' => 'Informasi Serta Merta'],
            [
                'deskripsi' => 'Informasi yang berkaitan dengan hajat hidup orang banyak',
                'url' => '/informasi-publik?tab=serta-merta',
                'icon' => 'ph-file-text',
                'is_active' => true,
                'urutan' => 3
            ]
        );
    }
}
