<?php

namespace App\Enums;

enum PaketEnum:string{
    case BASIC = '1 bulan';
    case MIDDLE = '3 bulan';
    case ADVANCE = '6 bulan';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}

