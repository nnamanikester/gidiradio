<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammeView extends Model
{
    protected $fillable = [
        'programme_id', 'ip_address', 'date'
    ];

    public function programme() {
        return $this->belongsTo('App\Programme');
    }

}
