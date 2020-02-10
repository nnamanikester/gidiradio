<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpisodeView extends Model
{

    protected $fillable = [
        'episode_id', 'ip_address', 'date'
    ];

    public function episode() {
        return $this->belongsTo('App\Episode');
    }

}
