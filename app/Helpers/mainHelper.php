<?php

use App\Enum\PageStatusEnum;
use App\Models\Page;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('pages'))
{
    function pages(): Collection
    {
        return Page::query()->where('status', PageStatusEnum::ACTIVE)->orderBy('sort_order')->get();
    }
}

if (!function_exists('photos'))
{
    function photos(): Collection
    {
        return Photo::query()->orderBy('sort_order')->get();
    }
}

if (!function_exists('setting'))
{
    function setting()
    {
        return Setting::query()->first();
    }
}
