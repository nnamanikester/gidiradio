<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oap extends Model
{
    protected $fillable = [
        'name', 'display_name', 'bio', 'title', 'slug', 'image', 'email'
    ];

    public function programmes() {
        return $this->hasMany('App\Programme');
    }

    public function episodes() {
        return $this->hasMany('App\Episode');
    }

    public function socials() {
        return $this->belongsToMany('App\Social');
    }

}
