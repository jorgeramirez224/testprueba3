<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    use WithPagination;
    public $search;
    public $cargado = false;
    public function render()
    {
        $ventas = ($this->cargado == true) ? Venta::join('datos_usuarios', 'ventas.id_usuario', '=', 'datos_usuarios.id')
            ->join('cursos', 'ventas.id_curso', '=', 'cursos.id')
            ->select('ventas.*',
                'datos_usuarios.nombre_usuario',
                'datos_usuarios.email',
                'cursos.curso',
            )->paginate(10) : [];

        return view('livewire.ventas.ventas-index', compact('ventas'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
