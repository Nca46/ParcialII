<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class TareaIndex extends Component
{
    public function render()
    {
        $tareas = $this->consulta();
        return view('livewire.tarea-index');
    }
    private function consulta(){
        $query = Tarea::orderByDesc('id');
        return $query;
    }
}
