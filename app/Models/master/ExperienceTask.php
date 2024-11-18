<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience_task_title',
        'experience_task_description'
    ];
}
