<?php

namespace App\Filament\Resources\UserIssuesResource\Pages;

use App\Filament\Resources\UserIssuesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserIssues extends EditRecord
{
    protected static string $resource = UserIssuesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
