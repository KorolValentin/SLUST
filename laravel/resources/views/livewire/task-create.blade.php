<div class="panel">
    <form wire:submit="save">
        <input type="text" wire:model="title">
        <div>@error('title') {{ $message }} @enderror</div>

        <textarea wire:model="description"></textarea>
        <div>@error('description') {{ $message }} @enderror</div>

        <input type="number" wire:model="priority">
        <div>@error('priority') {{ $message }} @enderror</div>

        <select wire:model="status">
            @php /* @var $status \App\Enums\TaskStatusEnum */ @endphp
            @foreach($status_cases as $status)
                <option value="{{ $status->value }}">{{ $status->label() }}</option>
            @endforeach
        </select>
        <div>@error('status') {{ $message }} @enderror</div>

        <button type="submit">Save</button>
    </form>
</div>
