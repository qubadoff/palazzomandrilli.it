<?php

namespace App\Models;

use App\Enum\ArtShopStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtShop extends Model
{
    use SoftDeletes;

    protected $table = 'art_shops';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => ArtShopStatusEnum::class,
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ArtShopImage::class)->orderBy('sort_order');
    }
}
