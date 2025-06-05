<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $task;

    public function mount($id)
    {
        $this->task = TaskModel::find($id);
    }

    public function render()
    {
        return view('livewire.task');
    }
}
