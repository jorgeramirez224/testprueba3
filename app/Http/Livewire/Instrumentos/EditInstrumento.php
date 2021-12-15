<?php

namespace App\Http\Livewire\Instrumentos;

use App\Models\Instrumento;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditInstrumento extends Component
{
    use WithFileUploads;
    public Instrumento $instrumento;
    public $foto;

    public function render()
    {
        return view('livewire.instrumentos.edit-instrumento');
    }

    public function editarInstrumento(){
        $this->validate();
        if($this->foto != null){
            if($this->instrumento->foto != null){
                Storage::disk('public')->delete($this->instrumento->foto);
            }
            $this->instrumento->foto = Storage::disk('public')->put('images/img_instrumentos', $this->foto);
        }
        $this->instrumento->save();
        return redirect(route('instrumentos'));
    }

    protected function rules(){
        return Rulesinstrumentos::Reglas();
    }
}
