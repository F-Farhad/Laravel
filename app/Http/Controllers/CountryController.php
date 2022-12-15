<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller{
    
    public function add(){
        // $j = 1;
        // for($i = 1; $i <= 20; $i++){
        //     $city = new City();
        //     $city-> name = 'City ' . $i;
        //     $city->country_id = $j;
        //     $city->save();

        //     if($i%2 === 0) $j++; 
        // }

    }

    public function show(){
        $countries = Country::all();
        return view('country.show', ['countries' => $countries]);

        // foreach($countries as $country){
        //     echo($country->name);
            
        //     foreach($country->city as $city){
        //         echo($city->name);
        //     }
        // }
    }
}
