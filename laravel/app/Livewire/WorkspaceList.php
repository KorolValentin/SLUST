<?php

namespace App\Livewire;

use App\Models\Workspace;
use Livewire\Component;

class WorkspaceList extends Component
{
    public $workspaces;

    public $search;

    public $sort;

    public $direction;

    public function mount()
    {
        $this->workspaces = Workspace::all();
    }

    public function sortBy($field)
    {
        if ($this->sort === $field) {
            $this->direction = $this->direction === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sort = $field;
            $this->direction = 'asc';
        }
    }

    public function show($id)
    {
        return redirect()->route('workspace.show', $id);
    }

    public function render()
    {
        return view('livewire.workspace-list');
    }
}
