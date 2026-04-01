<?php

namespace App\Filament\Resources\ArtShopResource\Pages;

use App\Filament\Resources\ArtShopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtShop extends EditRecord
{
    protected static string $resource = ArtShopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
