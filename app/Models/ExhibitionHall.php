<?php

namespace App\Models;

use App\Enum\ExhibitionHallStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExhibitionHall extends Model
{
    use SoftDeletes;

    protected $table = 'exhibition_halls';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => ExhibitionHallStatusEnum::class,
    ];
}
