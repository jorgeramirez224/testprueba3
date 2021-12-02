<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use App\Models\DatosUsuario;

class ShowUsuario extends Component
{
    public DatosUsuario $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.show-usuario');
    }
}
