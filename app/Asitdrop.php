<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asitdrop extends Model
{
    protected $fillable = [
        'user_id', 'title', 'artist', 'image', 'audio'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function plays()
    {
        return $this->hasMany('App\AsitdropPlay');
    }

}
