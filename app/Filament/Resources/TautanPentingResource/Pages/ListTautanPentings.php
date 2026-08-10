<?php

namespace App\Filament\Resources\TautanPentingResource\Pages;

use App\Filament\Resources\TautanPentingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTautanPentings extends ListRecords
{
    protected static string $resource = TautanPentingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Tautan Penting'),
        ];
    }
}
