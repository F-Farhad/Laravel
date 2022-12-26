<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller{

    public function addForm(Request $request){
        if($request->has('categoryId') && $request->has('postId')){
            $category = Category::find($request->input('categoryId'));
            $post = Post::find($request->input('postId'));

            if($category != null && $post != null){
                $post->categories()->attach($category->id);
                echo $post->name . ' теперь относится к категории ' . $category->category;
            }else{
                echo 'Нет такой категории или поста';
            }

        }else{
            return view('post.addForm');
        }
    }

    public function show(){
        $posts = Post::all();

        foreach($posts as $post){
            echo $post->name . '<br>';

            foreach($post->categories as $category){
                echo ' - ' . $category->category . '<br>';
            }
        }
    }







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