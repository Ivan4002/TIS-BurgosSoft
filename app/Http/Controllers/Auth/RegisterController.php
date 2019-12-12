<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\SocialProfile;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin3';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'code' => 'required|integer',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *ª
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user= User::create([
                 'name' => $data['name'],
                 'code' => $data['code'],
                 'email' => $data['email'],
                 'password' => bcrypt($data['password']),
        ]);
        $snet=$user->id;
        $social=SocialProfile::create(['user_id'=>$snet, 'avatar'=>'/adminlte/img/user-burgos.jpg']);

      // $user->profiles().;
        return $user;
    }
}
