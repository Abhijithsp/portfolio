<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'project_description',
        'project_screenshot',
        'project_url',
        'appstore_url',
        'playstore_url',
        'github_url',
        'project_tags',

    ];
}
