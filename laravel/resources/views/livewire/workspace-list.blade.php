<div class="panel">
    List of workspaces
    <div>
        <ul class="quest-list">
            @foreach ($workspaces as $workspace)
                <li wire:click="show({{$workspace->id}})">
                    <p>{{ $workspace->name }}</p>
                    <span>({{ $workspace->description }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
