<?php

namespace App\Models;

use App\Enum\PageStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => PageStatusEnum::class,
    ];
}
