<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login.login');
    }

    public function login(){
        $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            return(redirect(route('cursos')));
        }
        else{
            $this->emit('alerta', 'Verificar correo electronico o password');
        }
    }

    public function rules(){
        return [
            'email' => 'required|email',
            'password' => 'min:8|string|required'
        ];
    }
}
