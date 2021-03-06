<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'user_id', 'title', 'body', 'image', 'slug'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\BlogComment');
    }

    public function views() {
        return $this->hasMany('App\BlogView');
    }

}
