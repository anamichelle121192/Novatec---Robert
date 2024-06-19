<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Asignación de Clientes, Cultivos e Ingenieros')]
class AsignacionCliCulIng extends Component
{
    public $dias_credito = [
        '1' => '0',
        '2' => '3',
        '3' => '7',
        '4' => '10',
        '5' => '15',
        '6' => '30',
        '7' => '56',
        '8' => '60',
        '9' => '90',
        '10' => '120',
        '11' => '150',
        '12' => '180',
        '13' => '210',
    ];

    public function render()
    {
        return view('livewire.asignacion-cli-cul-ing');
        //->layout('components.layouts.layout-robert')
    }
}
