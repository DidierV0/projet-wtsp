<?php

namespace App\Filament\Resources\CustumerResource\Pages;

use App\Filament\Resources\CustumerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustumers extends ListRecords
{
    protected static string $resource = CustumerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
