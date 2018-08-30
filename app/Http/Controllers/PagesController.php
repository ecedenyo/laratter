<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        //return view('welcome');
    	
        /*$messages = [
            [
                'id' => 1,
                'content' => 'Este es mi primer mensaje',
                //'image' => 'http://lorempixel.com/600/338?1'
                //'image' => 'http://imgplaceholder.com/600x320/ff7f7f/333333/fa-image'
                'image' => 'http://picsum.photos/600/338?image=1'
            ],[
                'id' => 2,
                'content' => 'Este es mi segundo mensaje',
                //'image' => 'http://lorempixel.com/600/338?2'
                //'image' => 'http://imgplaceholder.com/600x320/ff7f7f/333333/fa-image'
                'image' => 'http://picsum.photos/600/338?image=2'
            ],[
                'id' => 3,
                'content' => 'Este es mi tercer mensaje',
                //'image' => 'http://lorempixel.com/600/338?3'
                //'image' => 'http://imgplaceholder.com/600x320/ff7f7f/333333/fa-image'
                'image' => 'http://picsum.photos/600/338?image=3'
            ],[
                'id' => 4,
                'content' => 'Este es mi cuarto mensaje',
                //'image' => 'http://lorempixel.com/600/338?4'
                //'image' => 'http://imgplaceholder.com/600x320/ff7f7f/333333/fa-image'
                'image' => 'http://picsum.photos/600/338?image=4'
            ]
        ];*/

        //$messages = Message::all();
        $messages = Message::latest()->paginate(10);

        //dd($messages); // dump and die, el var_dump … die() de Laravel

        return view('bemvindo', [
            'messages' => $messages
            //'messages' => []
        ]);
    }

    public function locale(Request $request) {
        session()->put('locale', $request->input('lang'));

        return back();
    }

    public function acerca() {
    	return view('about');
    }

    public function benvenuto() {
    	$links = [
            'acerca' => 'Acerca de',
			'https://platzi.com/laravel' => 'Curso de Platzi',
			'https://laravel.com' => 'Laravel',
		];

		return view('benvenuto', [
			'teacher' => 'Guido Contreras Woda',
			'links' => $links
		]);
    }
}
