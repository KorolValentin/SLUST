<div class="panel">
    List of projects
    <div>
        <ul class="quest-list">
            @foreach ($projects as $project)
                <li wire:click="show({{$project->id}})">
                    <p>{{ $project->title }}</p>
                    <span>({{ $project->description }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
