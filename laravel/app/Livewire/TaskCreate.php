<?php

namespace App\Livewire;

use App\Enums\TaskStatusEnum;
use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\Task;

class TaskCreate extends Component
{
    public $title;
    public $description;
    public $priority;
    public $status;
    public $project_id;

    public function mount($project_id)
    {
        $this->project_id = $project_id;
        $this->status = TaskStatusEnum::TODO;
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|min:3',
            'description' => 'sometimes|min:3',
            'priority' => 'required|integer|min:3',
            'status' => [
                'required',
                Rule::enum(TaskStatusEnum::class),
            ],
        ]);

        Task::create($validated + ['project_id' => $this->project_id]);

        return redirect()->route('project.show', $this->project_id);
    }

    public function render()
    {
        return view('livewire.task-create',
            [
                'project_id' => $this->project_id,
                'status_cases'=> TaskStatusEnum::cases()
            ]);
    }
}
