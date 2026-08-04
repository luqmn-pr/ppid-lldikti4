<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegulasiResource\Pages;
use App\Filament\Resources\RegulasiResource\RelationManagers;
use App\Models\Regulasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegulasiResource extends Resource
{
    protected static ?string $model = Regulasi::class;

    protected static ?string $modelLabel = 'Regulasi';
    protected static ?string $pluralModelLabel = 'Regulasi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('sinopsis')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('file_pdf')
                    ->directory('regulasi')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(10240)
                    ->requiredWithout('link_tautan')
                    ->rule('prohibits:link_tautan'),
                Forms\Components\TextInput::make('link_tautan')
                    ->label('Link Eksternal')
                    ->url()
                    ->maxLength(255)
                    ->requiredWithout('file_pdf')
                    ->rule('prohibits:file_pdf')
                    ->live(),
                Forms\Components\Select::make('jenis_tautan')
                    ->label('Kategori Tautan')
                    ->options([
                        'web' => 'Tautan Web',
                        'drive' => 'Tautan Google Drive (Dokumen)',
                    ])
                    ->requiredWith('link_tautan')
                    ->visible(fn (Forms\Get $get) => filled($get('link_tautan'))),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file_pdf')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegulasis::route('/'),
            'create' => Pages\CreateRegulasi::route('/create'),
            'edit' => Pages\EditRegulasi::route('/{record}/edit'),
        ];
    }
}
