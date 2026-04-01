<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArtShopImage extends Model
{
    protected $table = 'art_shop_images';

    protected $guarded = ['id'];

    public function artShop(): BelongsTo
    {
        return $this->belongsTo(ArtShop::class);
    }
}
