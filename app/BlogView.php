<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogView extends Model
{
    protected $fillable = [
        'blog_id', 'ip_address', 'date'
    ];

    public function blog() {
        return $this->belongTo('App\Blog');
    }

}
