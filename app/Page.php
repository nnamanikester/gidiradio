<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name', 'user_id', 'content', 'slug'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
