<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller{
    
    public function add(){
        for($i = 3; $i < 10; $i++){
            $role = Role::find($i);

            $user = new User();
            $user->name = 'User ' . $i + 9;
            $user->save();

            $role->users()->attach($role->id);
        }
    }

    public function show(){
        $roles = Role::all();

        foreach($roles as $role){
            echo $role->role . '<br>';
            foreach($role->users as $user){
                echo ' - ' . $user->name . '<br>';
            }
        }
    }
}
