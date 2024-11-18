<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    use HasFactory;

    protected $fillable = [
        'tech_stack_name',
        'tech_stack_url',
        'tech_stack_icon'
    ];
}
