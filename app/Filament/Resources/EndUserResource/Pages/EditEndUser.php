<?php

namespace App\Filament\Resources\EndUserResource\Pages;

use App\Filament\Resources\EndUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEndUser extends EditRecord
{
    protected static string $resource = EndUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
