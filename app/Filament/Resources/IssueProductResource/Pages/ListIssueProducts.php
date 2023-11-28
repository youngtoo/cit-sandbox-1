<?php

namespace App\Filament\Resources\IssueProductResource\Pages;

use App\Filament\Resources\IssueProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIssueProducts extends ListRecords
{
    protected static string $resource = IssueProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
