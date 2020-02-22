<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name', 'logo', 'favico', 'link', 'email', 'phone', 'footer_text', 'signboard_title',
        'signboard_button_text', 'signboard_button_link', 'signboard_image', 'default_thumbnail', 'tag_line',
        'facebook', 'twitter', 'instagram', 'radio_station'
    ];

}
