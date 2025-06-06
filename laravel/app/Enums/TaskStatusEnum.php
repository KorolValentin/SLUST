<?php

namespace App\Enums;

enum TaskStatusEnum: string
{
    case TODO = 'todo';
    case IN_PROGRESS = 'in_progress';

    public function label()
    {
        return match ($this) {
            self::TODO => 'Todo',
            self::IN_PROGRESS => 'In progress',
        };
    }
}
