<?php

namespace App\Livewire;

use App\Models\Pacientes;
use Livewire\Component;

class MostrarPaciente extends Component
{
    public $nro_historia;
    public $name;

    public function updatedNroHistoria($value)
    {
        $paciente = Pacientes::find($value);
        if ($paciente) {
            $this->name = $paciente->nombre;
        } else {
            $this->name = null;
        }
    }


    public function render()
    {
        //$doctores = Pacientes::where();
        return view('livewire.crear-uci');
        //return view('livewire.mostrar-paciente');
        
    }
}
