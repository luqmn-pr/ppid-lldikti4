<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $title = 'Konten Info & Kontak';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Logo & Favicon')
                    ->schema([
                        Forms\Components\FileUpload::make('site_logo')
                            ->image()
                            ->directory('settings')
                            ->preserveFilenames()
                            ->label('Logo Website (Navbar)'),
                        Forms\Components\FileUpload::make('footer_logo')
                            ->image()
                            ->directory('settings')
                            ->preserveFilenames()
                            ->label('Logo Footer'),
                        Forms\Components\FileUpload::make('favicon')
                            ->image()
                            ->directory('settings')
                            ->preserveFilenames()
                            ->label('Favicon (Logo Tab Browser)'),
                    ])->columns(3),

                Forms\Components\Section::make('Informasi Kontak')
                    ->schema([
                        Forms\Components\Textarea::make('alamat_kantor')->required(),
                        Forms\Components\TextInput::make('waktu_pelayanan')->required(),
                        Forms\Components\TextInput::make('kontak_telepon')->required(),
                        Forms\Components\TextInput::make('kontak_whatsapp')->required(),
                        Forms\Components\TextInput::make('email_resmi')->email()->required(),
                        Forms\Components\TextInput::make('url_lapor')->url()->required()->label('URL Website LAPOR!'),
                    ])->columns(2),

                Forms\Components\Section::make('Sosial Media')
                    ->schema([
                        Forms\Components\TextInput::make('url_instagram')->url()->required()->label('Instagram URL'),
                        Forms\Components\TextInput::make('url_tiktok')->url()->required()->label('TikTok URL'),
                        Forms\Components\TextInput::make('url_youtube')->url()->required()->label('YouTube URL'),
                        Forms\Components\TextInput::make('url_facebook')->url()->required()->label('Facebook URL'),
                    ])->columns(2),

                Forms\Components\Section::make('Footer & Maklumat')
                    ->schema([
                        Forms\Components\Textarea::make('footer_description')->required()->label('Deskripsi Footer')->columnSpanFull(),
                        Forms\Components\FileUpload::make('maklumat_image')
                            ->image()
                            ->directory('settings')
                            ->preserveFilenames()
                            ->label('Sertifikat Maklumat Pelayanan')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
