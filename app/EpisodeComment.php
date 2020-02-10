<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpisodeComment extends Model
{
    protected $fillable = [
        'episode_id', 'name', 'email', 'website', 'body', 'approved'
    ];

    public function episode() {
        return $this->belongsTo('App\Episode');
    }

}
