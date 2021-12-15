<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\DatosUsuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUsuario extends Component
{
    use WithFileUploads;
    public DatosUsuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;

    public function render()
    {
        return view('livewire.usuarios.edit-usuario');
    }

    public function editarUsuario(){
        $this->validate();
        if($this->foto!=null){
            if($this->usuario->foto!=null){
                Storage::disk('public')->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk('public')->put('images/img_usuarios', $this->foto);
        }
        if ($this->password){
            $this->usuario->password = Hash::make($this->password);
        }

        $this->usuario->save();
        return redirect(route('usuarios'));
    }

    protected function rules(){
        return RulesUsuarios::Reglas($this->usuario->id);
    }
}
