<?php

namespace App\Filament\Resources\BalenceResource\Pages;

use App\Filament\Resources\BalenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBalences extends ListRecords
{
    protected static string $resource = BalenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
