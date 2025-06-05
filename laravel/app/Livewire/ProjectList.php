<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;

    public function mount($id)
    {
        $this->projects = Project::where('workspace_id', $id)->get();
    }

    public function show($id)
    {
        return redirect()->route('project.show', $id);
    }

    public function render()
    {
        return view('livewire.project-list');
    }
}
