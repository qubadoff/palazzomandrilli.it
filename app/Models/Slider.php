<?php

namespace App\Models;

use App\Enum\SliderStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $table = 'sliders';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => SliderStatusEnum::class,
    ];
}
