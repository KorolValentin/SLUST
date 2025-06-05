<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    public function mount($id)
    {
        $this->tasks = Task::where('project_id', $id)->get();
    }

    public function show($id)
    {
        return redirect()->route('task.show', $id);
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
