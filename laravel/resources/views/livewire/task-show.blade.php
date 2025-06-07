<div class="panel">
    <div class="flex items-center justify-between border-b pb-2 mb-4">
        <h2 class="text-lg font-bold text-gray-800 dark:text-white">
            {{ $task->title }}
        </h2>
        <div>
            @livewire('tracker', ['entity' => $task], key($task->id))
        </div>
    </div>

    asdasdas
</div>
