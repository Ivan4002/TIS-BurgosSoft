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
    protected $guarded = [];

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
    public function roles()
    {
       return $this->belongsToMany(Role::class,'assigned_roles');
    }
    public function hasRoles(array $roles)
    {
        foreach ($roles as $role)
        {
             foreach ($this->roles as $userRole)
             {

                if ($userRole->name === $role)
                {
                    return true;
                }
             }
        }
        return false;
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
