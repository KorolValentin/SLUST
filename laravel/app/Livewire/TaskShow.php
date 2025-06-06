<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as Task;

class TaskShow extends Component
{
    public $task;

    public function mount($id)
    {
        $this->task = Task::find($id);
    }

    public function render()
    {
        return view('livewire.task-show');
    }
}
