<div class="panel">
    List of tasks
    <div>
        <ul class="quest-list">
            @foreach ($tasks as $task)
                <li wire:click="show({{$task->id}})">
                    <p>{{ $task->title }}</p>
                    <span>({{ $task->description }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
