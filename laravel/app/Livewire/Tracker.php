<?php

namespace App\Livewire;

use App\Models\TimeLog;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Tracker extends Component
{
    public $entity;

    public ?TimeLog $timeLog = null;

    public $startTime = null;

    public $endTime = null;

    public $timeDuration = '00:00:00';

    protected $listeners = ['force-stop-others' => 'handleStopFromOther'];


    public function mount($entity)
    {
        $this->entity = $entity;

        $this->timeLog = $this->entity->timeable()->active()->first();

        if ($this->timeLog) {
            $this->startTime = $this->timeLog->started_at;
        }

        $this->tick();
    }

    public function start()
    {
        if (!$this->timeLog) {
            $this->dispatch('force-stop-others', exceptId: $this->getId());

            $this->startTime = Carbon::now();

            foreach (TimeLog::active()->get() as $timeLog) {
                $duration = Carbon::parse($timeLog->started_at)->diffInSeconds($this->startTime);
                $timeLog->update([
                    'ended_at' => $this->startTime,
                    'duration' => (int)$duration,
                ]);
            }

            $this->timeLog = $this->entity->timeable()->create([
                'started_at' => $this->startTime,
            ]);
        }
    }

    public function stop()
    {
        if ($this->timeLog) {
            $this->endTime = Carbon::now();

            $duration = Carbon::parse($this->timeLog->started_at)->diffInSeconds($this->endTime);

            $this->timeLog->update([
                'ended_at' => $this->endTime,
                'duration' => (int)$duration,
            ]);

            $this->timeLog = null;
        }
    }

    public function handleStopFromOther($exceptId)
    {
        if ($this->getId() !== $exceptId) {
            $this->stop();
        }
    }

    public function tick()
    {
        if($this->timeLog && $this->startTime) {
            $this->timeDuration = Carbon::parse($this->startTime)->diff(Carbon::now())->format('%H:%I:%S');
        }
    }

    public function render()
    {
        return view('livewire.tracker');
    }
}
