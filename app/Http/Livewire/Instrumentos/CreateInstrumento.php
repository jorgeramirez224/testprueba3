<?php

namespace App\Http\Livewire\Instrumentos;

use App\Models\Instrumento;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateInstrumento extends Component
{
    use WithFileUploads;
    public Instrumento $instrumento;
    public $foto;

    public function mount(){
        $this->instrumento = new Instrumento();
    }

    public function render()
    {
        return view('livewire.instrumentos.create-instrumento');
    }

    public function crearInstrumento(){
        $this->validate();
        if($this->foto != null){
            $this->instrumento->foto = Storage::disk('public')->put('images/img_instrumentos', $this->foto);
        }
        $this->instrumento->save();
        return redirect(route('instrumentos'));
    }

    protected function rules(){
        return RulesInstrumentos::Reglas();
    }
}
