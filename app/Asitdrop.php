<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asitdrop extends Model
{
    protected $fillabel = [
        'user_id', 'title', 'artist', 'image', 'audio'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
