<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'name',
        'user_photo',
        'title',
        'email',
        'phone_no',
        'github_url',
        'linked_in_url',
        'instagram_url'
    ];
}
