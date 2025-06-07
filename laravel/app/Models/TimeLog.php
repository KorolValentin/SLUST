<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    use HasFactory;

    /** @use HasFactory<\Database\Factories\TimeLogFactory> */

    public $timestamps = false;

    protected $fillable = [
        'timeable_id',
        'timeable_type',
        'started_at',
        'ended_at',
        'duration',
    ];

    public function loggable()
    {
        return $this->morphTo();
    }

    public function scopeActive(Builder $query)
    {
        $query->whereNull('duration');
    }
}
