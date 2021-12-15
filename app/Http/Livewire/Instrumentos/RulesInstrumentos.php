<?php

namespace App\Http\Livewire\Instrumentos;

class RulesInstrumentos{
    public static function Reglas(){
        return[
            'instrumento.instrumento' => 'required|string',
            'foto' => 'nullable|image',
            'instrumento.precio' => 'numeric|required',
            'instrumento.marca' => 'required|string',
            'instrumento.proveedor' => 'required|string',

        ];
    }
}
