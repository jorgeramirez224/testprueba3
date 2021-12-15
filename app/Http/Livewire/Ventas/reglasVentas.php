<?php

namespace App\Http\Livewire\Ventas;

class ReglasVentas{
    public static function reglas(){
        return [
            'venta.id_usuario'=>'required',
            'venta.id_curso'=>'required',
        ];
    }
}
