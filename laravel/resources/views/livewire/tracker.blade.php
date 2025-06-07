<div class="panel mb-4 border p-4 rounded bg-gray-100">
    <div class="flex justify-between items-center mb-2">
        <h2 class="font-semibold">{{ $entity->id  }}</h2>
        <div id="counter-{{ $entity->id }}" class="text-lg font-mono">{{ $timeDuration }}</div>
    </div>

    <div class="space-x-2">
        <button wire:click="start" class="bg-green-500 text-white px-4 py-1 rounded">Start</button>
        <button wire:click="stop" class="bg-red-600 text-white px-4 py-1 rounded">Stop</button>
    </div>

    <script>
        document.addEventListener('livewire:init', () => {
        setInterval(() => {
            console.log('tick');
            console.log('{{ $this->getId() }}');
            Livewire.find('{{ $this->getId() }}').call('tick');
        }, 1000);
        });
    </script>
</div>

