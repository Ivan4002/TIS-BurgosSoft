<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;
class SocialLoginController extends Controller
{
    public function redirectToFacebook()
    {
    	return Socialite::driver('facebook')->redirect();

    }
    public function handleFacebookCallback()
    {
 		// $facebookUser = Socialite::driver('facebook')->user();

 		// dd($facebookUser);
    }
}
