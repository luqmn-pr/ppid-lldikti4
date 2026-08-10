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
                Forms\Components\Section::make('Informasi Kontak')
                    ->schema([
                        Forms\Components\Textarea::make('alamat_kantor')->required(),
                        Forms\Components\TextInput::make('waktu_pelayanan')->required(),
                        Forms\Components\TextInput::make('kontak_telepon')->required(),
                        Forms\Components\TextInput::make('kontak_whatsapp')->required(),
                        Forms\Components\TextInput::make('email_resmi')->email()->required(),
                        Forms\Components\TextInput::make('url_lapor')->url()->required()->label('URL Website LAPOR!'),
                    ])->columns(2),

                Forms\Components\Section::make('Sosial Media & Peta')
                    ->schema([
                        Forms\Components\TextInput::make('url_instagram')->url()->required()->label('Instagram URL'),
                        Forms\Components\TextInput::make('url_tiktok')->url()->required()->label('TikTok URL'),
                        Forms\Components\TextInput::make('url_youtube')->url()->required()->label('YouTube URL'),
                        Forms\Components\TextInput::make('url_facebook')->url()->required()->label('Facebook URL'),
                        Forms\Components\Textarea::make('url_map')->required()->label('Google Maps Embed URL')->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Footer & Maklumat')
                    ->schema([
                        Forms\Components\Textarea::make('footer_description')->required()->label('Deskripsi Footer')->columnSpanFull(),
                        Forms\Components\FileUpload::make('maklumat_image')
                            ->image()
                            ->directory('settings')
                            ->label('Sertifikat Maklumat Pelayanan')
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('file_form_permohonan')
                            ->label('File Form Permohonan Informasi (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('formulir'),
                        Forms\Components\FileUpload::make('file_form_keberatan')
                            ->label('File Form Pernyataan Keberatan (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('formulir'),
                    ]),
            ]);
    }
}
