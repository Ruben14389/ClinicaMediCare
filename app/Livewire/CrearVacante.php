<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        //Consultar la BASE de DATOS
        $salarios = Salario::all();

        return view('livewire.crear-vacante',[
            'salarios'=>$salarios
        ]);
    }
}
