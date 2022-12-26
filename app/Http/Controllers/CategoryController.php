<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class CategoryController extends Controller{
    

    public function add(){
        // for($i = 1; $i <= 10; $i++){
        //     $category = new Category();
        //     $category->category = 'Category ' . $i;
        //     $category->save();

        //     $category->posts()->attach($i);
        // }
    }

    public function show(Request $request, $id){
        if($request->has('id')){
            echo (Category::find($request->input('id')))->category;
        }else{
            return view('category.show', ['id' => $id]);
        }
    }
}
