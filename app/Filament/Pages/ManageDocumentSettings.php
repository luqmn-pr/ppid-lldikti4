<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageDocumentSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $title = 'Dokumen & Formulir';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Upload Dokumen PDF')
                    ->schema([
                        Forms\Components\FileUpload::make('file_form_permohonan')
                            ->label('File Form Permohonan Informasi (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('formulir')
                            ->preserveFilenames(),
                        Forms\Components\FileUpload::make('file_form_keberatan')
                            ->label('File Form Pernyataan Keberatan (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('formulir')
                            ->preserveFilenames(),
                        Forms\Components\FileUpload::make('file_daftar_informasi_publik')
                            ->label('File Daftar Informasi Publik (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('dokumen')
                            ->preserveFilenames(),
                    ]),
            ]);
    }
}
