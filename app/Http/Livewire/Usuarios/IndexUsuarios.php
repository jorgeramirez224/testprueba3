<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\DatosUsuario;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuarios extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $usuarios = ($this->cargado==True) ? DatosUsuario::where('nombre_usuario', 'LIKE', '%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.usuarios.index-usuarios', compact('usuarios'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
