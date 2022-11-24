<?php

namespace App\Http\Livewire\Pendaftaran;

use App\Models\Pendaftaran;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;


    public function update($id)
    {
        $cek = Pendaftaran::find($id);
        $cek->status->transitionTo(\App\State\Daftar\Clear::class);
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.pendaftaran.index', [
            'daftar' => Pendaftaran::latest()->paginate(5)
        ]);
    }
}
