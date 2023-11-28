<?php

namespace App\Filament\Resources\UserIssuesResource\Pages;

use App\Filament\Resources\UserIssuesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserIssues extends ListRecords
{
    protected static string $resource = UserIssuesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
