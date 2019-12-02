<?php

namespace App;

use App\SocialProfile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function canImpersonate()
    {
        // si el usuario es administrador
        return $this->id === 1;
    }
    public function profiles()
    {
        return $this->hasMany(SocialProfile::class);
    }
    public function getAvatarAttribute()
    {

            return $this->profiles->last()->avatar;
    }
}
