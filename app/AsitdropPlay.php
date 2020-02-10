<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsitdropPlay extends Model
{
    protected $fillable = [
        'asitdrop_id', 'ip_address'
    ];

    public function Asitdrop() {
        return $this->belongsTo('App\Asitdrop');
    }

}
