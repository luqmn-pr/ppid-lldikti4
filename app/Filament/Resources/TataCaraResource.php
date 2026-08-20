<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TataCaraResource\Pages;
use App\Filament\Resources\TataCaraResource\RelationManagers;
use App\Models\TataCara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TataCaraResource extends Resource
{
    protected static ?string $model = TataCara::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $pluralModelLabel = 'Tata Cara';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kategori')
                    ->options([
                        'permohonan_informasi' => 'Permohonan Informasi',
                        'pengajuan_keberatan' => 'Pengajuan Keberatan',
                        'sengketa_informasi' => 'Penyelesaian Sengketa',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('judul_langkah')
                    ->label('Judul Tata Cara')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar/Ilustrasi (PNG/SVG)')
                    ->image()
                    ->directory('tata-cara')
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->label('Tautan Dokumen (Google Drive/URL)')
                    ->url()
                    ->required(),
                Forms\Components\TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('judul_langkah')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('link')
                    ->limit(50),
                Tables\Columns\TextColumn::make('urutan')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListTataCaras::route('/'),
            'create' => Pages\CreateTataCara::route('/create'),
            'edit' => Pages\EditTataCara::route('/{record}/edit'),
        ];
    }
}
