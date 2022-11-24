<?php

namespace App\Http\Controllers;


class PostController extends Controller{

    const USERS = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];


    public function test(){
        return view('post.test', ['var' => 'Just text']);
    }

    public function showUserCity($id){
        return view('post.showUserCity', ['user' => self::getUser($id), 'title' => 'Check']);
    }

    private  static function getUser($id){
        return array_key_exists($id, self::USERS) ? self::USERS[$id] : 'User haven\'t';
    }
}