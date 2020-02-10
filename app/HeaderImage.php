<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderImage extends Model
{
    protected $fillable = [
        'user_id', 'image', 'title', 'content', 'button_text', 'button_link', 'active'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
