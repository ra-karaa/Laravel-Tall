<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\PaketEnum;
use App\Enums\StatusEnum;
use App\State\Daftar\DaftarState;
use Spatie\ModelStates\HasStates;

class Pendaftaran extends Model
{
    use HasFactory;
    use HasStates;

    protected $table = 'pendaftarans';

    protected $fillable =
    [
        'name',
        'harga',
        'reminder',
        'paket',
        'status'
    ];

    protected $casts = [
        'paket' => PaketEnum::class,
        'status' => DaftarState::class
    ];
}
