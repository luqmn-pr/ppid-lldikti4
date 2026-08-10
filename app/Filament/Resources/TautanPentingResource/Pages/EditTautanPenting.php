<?php

namespace App\Filament\Resources\TautanPentingResource\Pages;

use App\Filament\Resources\TautanPentingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTautanPenting extends EditRecord
{
    protected static string $resource = TautanPentingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
