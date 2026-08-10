<?php

namespace App\Filament\Pages;

use App\Settings\ProfilSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageProfilSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $title = 'Konten Profil PPID';

    protected static string $settings = ProfilSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tentang & Visi')
                    ->schema([
                        Forms\Components\Textarea::make('tentang_ppid')->required()->label('Tentang PPID (Paragraf)')->rows(4),
                        Forms\Components\Textarea::make('visi')->required()->label('Visi LLDIKTI IV')->rows(4),
                    ]),

                Forms\Components\Section::make('Misi')
                    ->schema([
                        Forms\Components\Repeater::make('misi')
                            ->label('Daftar Misi')
                            ->schema([
                                Forms\Components\TextInput::make('teks')->required()->label('Teks Misi'),
                            ])
                            ->addActionLabel('Tambah Misi')
                            ->defaultItems(3),
                    ]),

                Forms\Components\Section::make('Tugas & Fungsi')
                    ->schema([
                        Forms\Components\Repeater::make('tugas_fungsi')
                            ->label('Daftar Tugas PPID')
                            ->schema([
                                Forms\Components\TextInput::make('teks')->required()->label('Teks Tugas'),
                            ])
                            ->addActionLabel('Tambah Tugas')
                            ->defaultItems(4),

                        Forms\Components\Repeater::make('wewenang')
                            ->label('Daftar Wewenang PPID')
                            ->schema([
                                Forms\Components\TextInput::make('teks')->required()->label('Teks Wewenang'),
                            ])
                            ->addActionLabel('Tambah Wewenang')
                            ->defaultItems(4),
                            
                        Forms\Components\Repeater::make('tim_pertimbangan')
                            ->label('Daftar Tugas Tim Pertimbangan')
                            ->schema([
                                Forms\Components\TextInput::make('teks')->required()->label('Teks Tugas Tim'),
                            ])
                            ->addActionLabel('Tambah Tugas Tim')
                            ->defaultItems(4),
                    ]),

                Forms\Components\Section::make('Struktur Organisasi')
                    ->schema([
                        Forms\Components\FileUpload::make('struktur_organisasi_image')
                            ->image()
                            ->directory('settings')
                            ->label('Gambar Bagan Struktur Organisasi'),
                    ]),
            ]);
    }
}
