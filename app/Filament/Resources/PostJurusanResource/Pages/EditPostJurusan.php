<?php

namespace App\Filament\Resources\PostJurusanResource\Pages;

use App\Filament\Resources\PostJurusanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostJurusan extends EditRecord
{
    protected static string $resource = PostJurusanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
