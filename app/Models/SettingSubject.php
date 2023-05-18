<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SettingSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id',
        'day',
        'start_time',
        'end_time',
        'limit_tope',
    ];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}

