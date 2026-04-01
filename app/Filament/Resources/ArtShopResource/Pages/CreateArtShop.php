<?php

namespace App\Filament\Resources\ArtShopResource\Pages;

use App\Filament\Resources\ArtShopResource;
use App\Models\ArtShopImage;
use Filament\Resources\Pages\CreateRecord;

class CreateArtShop extends CreateRecord
{
    protected static string $resource = ArtShopResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        unset($data['gallery_images']);
        return $data;
    }

    protected function afterCreate(): void
    {
        $galleryImages = $this->data['gallery_images'] ?? [];

        foreach ($galleryImages as $index => $image) {
            ArtShopImage::create([
                'art_shop_id' => $this->record->id,
                'image' => $image,
                'sort_order' => $index,
            ]);
        }
    }
}
