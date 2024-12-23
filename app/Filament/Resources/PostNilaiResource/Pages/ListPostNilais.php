<?php

namespace App\Filament\Resources\PostNilaiResource\Pages;

use App\Filament\Resources\PostNilaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostNilais extends ListRecords
{
    protected static string $resource = PostNilaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
