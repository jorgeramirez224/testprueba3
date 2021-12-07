<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;

class IndexCursos extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $cursos = ($this->cargado == True) ? Curso::where('curso', 'LIKE', '%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.cursos.index-cursos', compact('cursos'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
