<?php

namespace App\Filament\Pages;

use App\Settings\RegulasiSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageRegulasiSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Regulasi';
    protected static ?string $title = 'Manajemen Tautan Regulasi';

    protected static string $settings = RegulasiSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                // ─── SECTION 1: Regulasi Umum ─────────────────────────
                Forms\Components\Section::make('📋 Regulasi Umum')
                    ->description('Berikut adalah regulasi yang berkaitan dengan keterbukaan informasi publik:')
                    ->schema([
                        Forms\Components\TextInput::make('link_uu_14_2008')
                            ->label('1. Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_pp_61_2010')
                            ->label('2. Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Keterbukaan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_perma_2_2011')
                            ->label('3. Peraturan Mahkamah Agung Nomor 2 Tahun 2011 tentang Tata Cara Penyelesaian Sengketa Informasi Publik di Pengadilan')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_perki_1_2013')
                            ->label('4. Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_perki_1_2021')
                            ->label('5. Peraturan Komisi Informasi Pusat Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                    ])
                    ->columns(1),

                // ─── SECTION 2: Regulasi Kemendikbud ──────────────────
                Forms\Components\Section::make('📄 Regulasi Kemendikbud')
                    ->description('Regulasi yang berkaitan dengan Kementerian Pendidikan Tinggi, Sains, dan Teknologi:')
                    ->schema([
                        Forms\Components\TextInput::make('link_permendikbud_69_2024')
                            ->label('Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 69 Tahun 2024 tentang Pengelolaan dan Pelayanan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_sk_biro_2025')
                            ->label('Keputusan Kepala Biro Umum, Hubungan Masyarakat, dan Pengadaan Barang dan Jasa Nomor 0894/A5/OT.02.02/2025 tentang Standar Pelayanan Permintaan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                    ])
                    ->columns(1),

                // ─── SECTION 3: POS ───────────────────────────────────
                Forms\Components\Section::make('📁 POS (Prosedur Operasional Standar)')
                    ->description('LLDIKTI Wilayah IV telah memiliki prosedur operasional standar (POS) dalam pelayanan informasi publik meliputi:')
                    ->schema([
                        Forms\Components\TextInput::make('link_pos_permintaan')
                            ->label('1. POS Layanan Permintaan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_pos_keberatan')
                            ->label('2. POS Layanan Keberatan Atas Permintaan Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_pos_pendokumentasian')
                            ->label('3. POS Pendokumentasian Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_pos_pemutakhiran')
                            ->label('4. POS Pemutakhiran dan Penetapan Daftar Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_pos_pengujian')
                            ->label('5. POS Pengujian Konsekuensi dan Penetapan Informasi yang Dikecualikan')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('link_pos_pengumuman')
                            ->label('6. POS Pengumuman Informasi Publik')
                            ->url()
                            ->placeholder('https://drive.google.com/...')
                            ->suffixIcon('heroicon-o-link'),
                    ])
                    ->columns(1),

            ]);
    }
}
