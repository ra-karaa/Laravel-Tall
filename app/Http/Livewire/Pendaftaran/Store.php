<?php

namespace App\Http\Livewire\Pendaftaran;

use App\Models\Pendaftaran;
use Livewire\Component;
use Carbon\Carbon;


class Store extends Component
{
    public $name;
    public $paket;
    public $harga;
    public $reminder;
    public $status;

    public function store()
    {

        $dt = Carbon::now();
        $harga = "0";

        $data = $this->validate([
            'name' => 'required',
            'paket' => 'required'
        ]);

        switch($this->paket){
            case "1 bulan":
                $harga = "50.000";
                break;
            case "3 bulan":
                $harga = "130.000";
                break;
            case "6 bulan":
                $harga = "250.000";
                break;
            default:
                $harga = "0";
        }

        Pendaftaran::create([
            'name' => $this->name,
            'paket' => $this->paket,
            'harga' => $harga,
            'reminder' => $dt->addMonths(3),
            'status' => 'Masih Utang'
        ]);



        return redirect('/');
    }


    public function render()
    {
        return view('livewire.pendaftaran.store');
    }
}
