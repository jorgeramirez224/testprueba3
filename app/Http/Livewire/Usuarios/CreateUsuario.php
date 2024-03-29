<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\DatosUsuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUsuario extends Component
{
    use WithFileUploads;
    public DatosUsuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount(){
        $this->usuario = new DatosUsuario();
    }

    public function render()
    {
        return view('livewire.usuarios.create-usuario');
    }

    public function crearUsuario(){
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if($this->foto!=null){
            $this->usuario->foto = Storage::disk('public')->put('images/img_usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios'));
    }

    protected function rules(){
        return RulesUsuarios::Reglas();
    }
}
