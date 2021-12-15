<?php

namespace App\Http\Livewire\Instrumentos;

use App\Models\Instrumento;
use Livewire\Component;

class ShowInstrumento extends Component
{
    public Instrumento $instrumento;
    public $foto;

    public function render()
    {
        return view('livewire.instrumentos.show-instrumento');
    }
}
