<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable = [
        'blog_id', 'name', 'email', 'website', 'body', 'approved'
    ];

    public function blog() {
        return $this->belongsTo('App\Blog');
    }

}
