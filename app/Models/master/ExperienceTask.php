<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExperienceTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience_id',
        'experience_task_title',
        'experience_task_description'
    ];

    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class);
    }
}
