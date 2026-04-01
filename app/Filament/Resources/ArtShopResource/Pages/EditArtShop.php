<?php

namespace App\Filament\Resources\ArtShopResource\Pages;

use App\Filament\Resources\ArtShopResource;
use App\Models\ArtShopImage;
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

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['gallery_images'] = $this->record->images->pluck('image')->toArray();
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['gallery_images']);
        return $data;
    }

    protected function afterSave(): void
    {
        $galleryImages = $this->data['gallery_images'] ?? [];

        $this->record->images()->delete();

        $sortOrder = 0;
        foreach ($galleryImages as $image) {
            ArtShopImage::create([
                'art_shop_id' => $this->record->id,
                'image' => $image,
                'sort_order' => $sortOrder++,
            ]);
        }
    }
}
