<?php

namespace App\Filament\Resources\PostJurusanResource\Pages;

use App\Filament\Resources\PostJurusanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostJurusans extends ListRecords
{
    protected static string $resource = PostJurusanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
