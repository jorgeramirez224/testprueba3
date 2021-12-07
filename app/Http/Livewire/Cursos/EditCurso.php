<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCurso extends Component
{
    use WithFileUploads;
    public Curso $curso;
    public $foto;

    public function render()
    {
        return view('livewire.cursos.edit-curso');
    }

    public function editarCurso(){
        $this->validate();
        if($this->foto != null){
            if($this->curso->foto != null){
                Storage::disk('public')->delete($this->curso->foto);
            }
            $this->curso->foto = Storage::disk('public')->put('images/img_cursos', $this->foto);
        }
        $this->curso->save();
        return redirect(route('cursos'));
    }

    protected function rules(){
        return RulesCursos::Reglas();
    }
}
