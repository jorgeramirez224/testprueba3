<?php

namespace App\Http\Livewire\Instrumentos;

use App\Models\Instrumento;
use Livewire\Component;
use Livewire\WithPagination;

class IndexInstrumento extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $instrumentos = ($this->cargado == True) ? Instrumento::where('instrumentos', 'LIKE', '%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.instrumentos.index-instrumento', compact('instrumentos'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }

}
