<?php

use App\Livewire\ProjectList;
use App\Livewire\Task;
use App\Livewire\TaskList;
use App\Livewire\WorkspaceList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workspaces', WorkspaceList::class);
Route::get('/workspaces/show/{id}', ProjectList::class)->name('workspace.show');
Route::get('/projects/show/{id}', TaskList::class)->name('project.show');
Route::get('/tasks/show/{id}', Task::class)->name('task.show');
