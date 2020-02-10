<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammeComment extends Model
{
    protected $fillable = [
        'programme_id', 'name', 'email', 'website', 'approved'
    ];

    public function programme() {
        return $this->belongsTo('App\Programme');
    }

}
