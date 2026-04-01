<?php

namespace App\Filament\Resources\ExhibitionHallResource\Pages;

use App\Filament\Resources\ExhibitionHallResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExhibitionHall extends EditRecord
{
    protected static string $resource = ExhibitionHallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
