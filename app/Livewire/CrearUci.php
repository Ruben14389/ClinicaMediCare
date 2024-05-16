<?php

namespace App\Livewire;

use App\Models\Enfermera;
use App\Models\Pacientes;
use App\Models\User;
use Livewire\Component;

class CrearUci extends Component
{

    public $nro_historia;
    public $name;

    public function updatedNroHistoria($value)
    {
        $paciente = User::find($value);
        if ($paciente) {
            $this->name = $paciente->name;
        } else {
            $this->name = null;
        }
    }



    public function render()
    {
        //Consultar la BASE de DATOS
        //$users = User::where('sexo', 'Masculino')->get();
        //$pacientes =User::where('name', 'eula')->get();
        $pacientes =Enfermera::all();
        $doctores = User::all();
        return view('livewire.crear-uci',[
            'pacientes'=>$pacientes,
            'doctores'=>$doctores
        ]);
    }
}
