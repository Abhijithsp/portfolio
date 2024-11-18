<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_url',
        'company_role',
        'joining_date',
        'resign_date',
        'job_type'
    ];


}
