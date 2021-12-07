<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCurso extends Component
{
    use WithFileUploads;
    public Curso $curso;
    public $foto;

    public function mount(){
        $this->curso = new Curso();
    }

    public function render()
    {
        return view('livewire.cursos.create-curso');
    }

    public function crearCurso(){
        $this->validate();
        if($this->foto != null){
            $this->curso->foto = Storage::disk('public')->put('images/img_cursos', $this->foto);
        }
        $this->curso->save();
        return redirect(route('cursos'));
    }

    protected function rules(){
        return RulesCursos::Reglas();
    }
}
