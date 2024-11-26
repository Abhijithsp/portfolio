<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechStack extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tech_stack_name',
        'tech_stack_url',
        'tech_stack_icon',
        'tech_stack_percent'
    ];
}
