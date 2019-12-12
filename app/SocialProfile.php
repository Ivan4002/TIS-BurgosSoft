<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
	protected $fillable = ['user_id', 'social_network_user_id', 'social_network', 'avatar'];

	public static $allowed = ['facebook', 'twitter', 'google'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
