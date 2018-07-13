<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\CreateMessageRequest;

class MessagesController extends Controller
{
    public function show(Message $message)
    {
    	//$message = Message::find($id);

    	return view('messages.show', [
    		'message' => $message,
    	]);
    }

    public function create(CreateMessageRequest $request)
    {
    	//dd($request->all());

    	//$this->validate($request, , );

        $user = $request->user();
        $image = $request->file('image');

    	$message = Message::create([
            'user_id' => $user->id,
    		'content' => $request->input('message'),
            //'image' => 'http://picsum.photos/600/338?image='.mt_rand(0,1000)
    		'image' => $image->store('messages', 'public')
    	]);

    	return redirect('/messages/'.$message->id);
    }
}

