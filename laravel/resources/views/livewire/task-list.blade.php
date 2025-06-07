<div class="panel">
    List of tasks
    <div>
        <button wire:click="create">Create new Task</button>
    </div>
    <div>
        <ul class="quest-list">
            @foreach ($tasks as $task)
                <li>
                    <div class="flex items-center justify-between border-b pb-2 mb-4">
                        <div wire:click="show({{$task->id}})" class="flex flex-col">
                            <h2 class="text-lg font-bold text-gray-800 dark:text-white">
                                {{ $task->title }}
                            </h2>
                            <h3 class="text-gray-600 dark:text-gray-300">
                                {{ $task->description }}
                            </h3>
                        </div>
                        <div>
                            @livewire('tracker', ['entity' => $task], key($task->id))
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
