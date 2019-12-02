<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Socialite;
use App\SocialProfile;
use Illuminate\Http\Request;
class SocialLoginController extends Controller
{
    public function redirectToSocialNetwork($socialNetwork)
    {
    	   return Socialite::driver($socialNetwork)->redirect();

    }
    public function handleSocialNetworkCallback($socialNetwork)
    {
    	// if (! request('code')) {
    	// }
        try {
     		$socialUser = Socialite::driver($socialNetwork)->user();
        } catch (Exception $e) {

    		return redirect()-> route('login')->with('warning', 'Hubo un error en el login...');
        }
    	//Verificar que existe un identificador de usuario en la red social
 	$socialProfile = SocialProfile::firstOrnew([
 			'social_network' => $socialNetwork,
 			'social_network_user_id'=> $socialUser->getId()
 		]);

 		if (! $socialProfile->exists)
 		 {

 		 	$user =User::firstOrnew(['email' => $socialUser->getEmail()]);
 		 	if (! $user->exists)
 		 	{
		 		$user->name = $socialUser->getName();
		 		$user->save();
 		 	}

 		 	$socialProfile->avatar = $socialUser->getAvatar();
 			$user->profiles()->save( $socialProfile );


 		}

 		Auth::login($socialProfile->user);

 		return redirect()->route('home')->with('success','Bienvenide ' . $socialProfile->user->name);
    }
}
