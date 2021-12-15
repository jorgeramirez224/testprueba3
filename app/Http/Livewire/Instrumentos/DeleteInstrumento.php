<?php

namespace App\Http\Livewire\Instrumentos;

use App\Models\Instrumento;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteInstrumento extends Component
{
    use WithFileUploads;
    public Instrumento $instrumento;
    public $foto;

    public function render()
    {
        return view('livewire.instrumentos.delete-instrumento');
    }

    public function eliminarInstrumento(){
        $this->instrumento->delete();
        Storage::disk('public')->delete($this->instrumento->foto);
        return redirect(route('instrumentos'));
    }
}
