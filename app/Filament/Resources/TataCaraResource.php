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
                Forms\Components\TextInput::make('kategori')
                    ->required(),
                Forms\Components\TextInput::make('judul_langkah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi_langkah')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('icon')
                    ->required()
                    ->maxLength(255)
                    ->default('ph-check-circle'),
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('icon')
                    ->searchable(),
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
