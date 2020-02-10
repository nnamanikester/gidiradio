<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    protected $fillable = [
        'social_id', 'user_id'
    ];

}
