<?php

namespace App\Filament\Resources\TataCaraResource\Pages;

use App\Filament\Resources\TataCaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTataCaras extends ListRecords
{
    protected static string $resource = TataCaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Tata Cara'),
        ];
    }
}
