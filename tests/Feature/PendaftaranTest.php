<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Livewire\Pendaftaran\Store;
use Livewire;
use App\Enums\PaketEnum as Paket;

class PendaftaranTest extends TestCase
{
     /** @test*/
    public function canInsert()
    {
        Livewire::test(Store::class)
        ->set('name', $this->faker->name)
        ->set('paket',  Paket::BASIC)
        ->set('harga', "50000")
        ->set('reminder', $this->faker->date())
        ->set('status', "Masih Utang")
        ->call('store')
        ->assertHasNoErrors(['name', 'paket', 'harga', 'reminder'])
        ->assertRedirect('/');
    }
}
