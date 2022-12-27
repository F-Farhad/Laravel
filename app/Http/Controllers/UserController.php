<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    
    public function add(Request $request){
        if($request->has('user_name') && $request->has('city_name')){
            $user = new User();
            $user->name = $request->input('user_name');
            $user->save();
            $city = new City();
            $city->city_name = $request->input('city_name');
           
            $user->city()->save($city);
        }else{
            return view('user.add');
        }
        
    }

    public function show(){
        $users = User::all();
        foreach($users as $user){
            echo $user->name . ' ';
            echo $user->city->city_name . '<br>';
        }
    }
}
