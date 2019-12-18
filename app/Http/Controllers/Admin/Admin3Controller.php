<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin3Controller extends Controller
{
	public function __construct()
	{
		$this->middleware(['roles:admin']);
	}
    public function index()
    {
    	return view('admin.dashboard');
    }
}
