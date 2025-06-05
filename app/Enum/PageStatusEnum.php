<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum PageStatusEnum:int implements HasLabel, HasColor
{
    case ACTIVE = 1;
    case INACTIVE = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::INACTIVE => 'danger',
        };
    }
}
