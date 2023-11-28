<?php

namespace App\Filament\Resources\IssueProductResource\Pages;

use App\Filament\Resources\IssueProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIssueProduct extends EditRecord
{
    protected static string $resource = IssueProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
