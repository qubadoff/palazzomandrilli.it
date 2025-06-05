<?php

namespace App\Models;

use App\Enum\EventStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'events';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => EventStatusEnum::class,
    ];
}
