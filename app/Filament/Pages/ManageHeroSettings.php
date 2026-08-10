<?php

namespace App\Filament\Pages;

use App\Settings\HeroSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageHeroSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $title = 'Konten Beranda (Hero)';

    protected static string $settings = HeroSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Teks Utama')
                    ->schema([
                        Forms\Components\TextInput::make('title')->required()->label('Judul Utama'),
                        Forms\Components\TextInput::make('subtitle')->required()->label('Subjudul'),
                        Forms\Components\Textarea::make('description1')->required()->label('Deskripsi 1 (Paragraf 1)'),
                        Forms\Components\Textarea::make('description2')->required()->label('Deskripsi 2 (Paragraf 2)'),
                    ])->columns(1),

                Forms\Components\Section::make('Gambar & Statistik')
                    ->schema([
                        Forms\Components\FileUpload::make('background_image')
                            ->image()
                            ->directory('settings')
                            ->label('Gambar Background')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('stats_count')->required()->label('Angka Statistik (cth: 65)'),
                        Forms\Components\TextInput::make('stats_label')->required()->label('Label Statistik (cth: Pemohon)'),
                        Forms\Components\TextInput::make('stats_description')->required()->label('Deskripsi Statistik (cth: Tahun 2022-2025)'),
                    ])->columns(3),
            ]);
    }
}
