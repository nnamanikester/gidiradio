<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'name', 'icon', 'link'
    ];

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function oaps() {
        return $this->belongsToMany('App\Oap');
    }

}
