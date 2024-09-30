<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskComponent extends Component
{
    public $tasks;

    public function mount()
    {
        // Cargamos todas las tareas desde el modelo Task.
        $this->tasks = Task::all();
    }

    public function render()
    {
        // Retornamos la vista 'livewire.task-component' con las tareas.
        return view('livewire.task-component', ['tasks' => $this->tasks]);
    }
}