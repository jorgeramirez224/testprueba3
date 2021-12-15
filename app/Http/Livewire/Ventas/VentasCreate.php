<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Curso;
use App\Models\DatosUsuario;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;

    public function mount(){
        $this->venta = new Venta();
    }

    public function render()
    {
        $cursos = Curso::all();
        $usuarios = DatosUsuario::all();
        return view('livewire.ventas.ventas-create', compact('cursos', 'usuarios'));
    }

    public function crearVenta(){
        $this->validate();
        $this->venta->save();
        $this->emit('alerta-crear-venta', 'Se creo con exito la venta');

    }

    public function rules(){
      return ReglasVentas::reglas();
    }
}
