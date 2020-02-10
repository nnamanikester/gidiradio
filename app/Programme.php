<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = [
        'user_id', 'oap_id', 'title', 'slug', 'image', 'details'
    ];

    public function episodes() {
        return $this->hasMany('App\Episode');
    }

    public function comments() {
        return $this->hasMany('App\ProgrammeComment');
    }

    public function views() {
        return $this->hasMany('App\ProgrammeView');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function oap() {
        return $this->belongsTo('App\Oap');
    }

    public function asitdrops() {
        return $this->hasMany('App\Asitdrop');
    }

}
