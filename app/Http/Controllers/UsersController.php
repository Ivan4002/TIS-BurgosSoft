<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
		// $this->middleware(['roles:admin']);
	}

	public function index()
	{
		$users = User::all();
		return view('index', compact('users'));
	}
}
