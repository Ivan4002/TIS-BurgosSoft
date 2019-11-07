<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request,[
    			'name' => 'required',
    			'email'=> 'required',
    			'subject' => 'required',
    			'content' => 'required|min:5'
    	],[
    			'name.required'=>'Necesito tu nombre'
    	]);
    	$entrada=$request->all();

    	//enviar email

    	Mail::to('ivangutierz20@gmail.com')->queue(new MessageReceived($entrada));
    	return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
