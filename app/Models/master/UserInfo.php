<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_nouns',
        'username',
        'name',
        'user_photo',
        'title',
        'email',
        'location',
        'address',
        'known_language',
        'phone_no',
        'github_url',
        'linked_in_url',
        'instagram_url'
    ];

    protected $casts = [
        'known_language' => 'array'
    ];
}
