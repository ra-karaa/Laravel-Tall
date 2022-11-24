<?php

namespace App\Enums;

enum StatusEnum:string{
    case PENDING = 'Masih Utang';
    case CLEAR = 'Udah Lunas';
}
