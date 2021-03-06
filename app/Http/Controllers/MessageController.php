<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function submit(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'mail' => 'required'
    		]);

    		$message = new Message;
    		$message->name = $request->input('name');
    		$message->mail = $request->input('mail');
    		$message->message = $request->input('message');
    		
    		$message->save();

    		return redirect('/')->with('success','Message Sent');

    }

    public function getMessages(){
    	$messages = Message::all();

    	return view('messages')->with('messages',$messages);

    }
}
