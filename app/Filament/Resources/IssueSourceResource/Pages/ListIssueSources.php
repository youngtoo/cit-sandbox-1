<?php

namespace App\Filament\Resources\IssueSourceResource\Pages;

use App\Filament\Resources\IssueSourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIssueSources extends ListRecords
{
    protected static string $resource = IssueSourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
