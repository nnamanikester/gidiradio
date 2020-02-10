<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpisodePlay extends Model
{
    protected $fillable = [
        'episode_id', 'ip_address'
    ];

    public function episode() {
        return $this->belongsTo('App\Episode');
    }

}
