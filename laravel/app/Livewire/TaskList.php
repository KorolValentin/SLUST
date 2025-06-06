<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;
    public $project_id;

    public function mount($id)
    {
        $this->project_id = $id;
        $this->tasks = Task::where('project_id', $id)->get();
    }

    public function show($id)
    {
        return redirect()->route('task.show', $id);
    }

    public function create()
    {
        return redirect()->route('task.create', ['project_id' => $this->project_id]);
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
