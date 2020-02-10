<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content', 'active'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}

