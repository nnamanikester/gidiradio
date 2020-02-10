<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'role_id', 'country', 'state', 'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function programmes() {
        return $this->hasMany('App\Programme');
    }

    public function episodes() {
        return $this->hasMany('App\Episode');
    }

    public function asitdrops() {
        return $this->hasMany('App\Asitdrop');
    }

    public function blogs() {
        return $this->hasMany('App\Blog');
    }

    public function pages() {
        return $this->hasMany('App\Page');
    }

    public function adverts() {
        return $this->hasMany('App\Advert');
    }

    public function headerImages() {
        return $this->hasMany('App\HeaderImage');
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }

}
