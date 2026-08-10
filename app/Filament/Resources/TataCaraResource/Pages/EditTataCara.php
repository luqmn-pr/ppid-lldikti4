<?php

namespace App\Filament\Resources\TataCaraResource\Pages;

use App\Filament\Resources\TataCaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTataCara extends EditRecord
{
    protected static string $resource = TataCaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
