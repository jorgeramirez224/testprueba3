<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuarios{
    public static function Reglas($id = null){
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return[
            'usuario.nombre_usuario' => 'required|string',
            'foto' => 'nullable|image',
            'usuario.email' => 'required|email|unique:datos_usuarios,email,'.$id,
            'password' => $validarPassword,
            'confirmar_password' => 'same:password',
        ];
    }
}
