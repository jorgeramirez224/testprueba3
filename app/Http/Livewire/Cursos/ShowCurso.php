<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Livewire\Component;

class ShowCurso extends Component
{
    public Curso $curso;
    public $foto;
    public function render()
    {
        return view('livewire.cursos.show-curso');
    }
}
