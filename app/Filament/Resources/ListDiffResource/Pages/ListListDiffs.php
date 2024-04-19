<?php

namespace App\Filament\Resources\ListDiffResource\Pages;

use App\Filament\Resources\ListDiffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListDiffs extends ListRecords
{
    protected static string $resource = ListDiffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
