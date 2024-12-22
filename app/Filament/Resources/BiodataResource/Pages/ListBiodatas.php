<?php

namespace App\Filament\Resources\BiodataResource\Pages;

use App\Filament\Resources\BiodataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiodatas extends ListRecords
{
    protected static string $resource = BiodataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
