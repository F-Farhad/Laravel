<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function show(){

        return view('test.test', ['arr' => DB::table('tests')->paginate(3)]);
    }
}
