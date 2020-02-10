<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    protected $fillable = [
        'programme_id', 'user_id', 'title', 'oap_id', 'details', 'audio', 'slug', 'image'
    ];

    public function programme() {
        return $this->belongsTo('App\Programme');
    }

    public function comments() {
        return $this->hasMany('App\EpisodeComment');
    }

    public function views() {
        return $this->hasMany('App\EpisodeView');
    }

    public function plays() {
        return $this->hasMany('App\EpisodePlays');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function oap() {
        return $this->belongsTo('App\Oap');
    }

}
