<?php

use App\Livewire\ProjectList;
use App\Livewire\TaskCreate;
use App\Livewire\TaskShow;
use App\Livewire\TaskList;
use App\Livewire\WorkspaceList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workspaces', WorkspaceList::class);
Route::get('/workspaces/show/{id}', ProjectList::class)->name('workspace.show');
Route::get('/projects/show/{id}', TaskList::class)->name('project.show');
Route::get('/tasks/show/{id}', TaskShow::class)->name('task.show');
Route::get('{project_id}/tasks/create', TaskCreate::class)->name('task.create');
