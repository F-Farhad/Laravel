<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Для избежания конфликтов следует писать более частные случаи маршрутов вначале, а потом - более общие.

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function(){
//     return 'it\'s test route';
// });

//     //parametrs in the function
// Route::get('/test/{id}', function($id){
//     return $id;
// });


// //a few parametrs in the function
// Route::get('/test/{id}/{name?}', function($id, $name = 'asd'){
//     return $id . $name;
// }) -> where('id', '[0-9]+');        //накладываем ограничение на параметр

// //шаблонные ограничения
// Route::get('set/{id}', function($id){
//     return $id;
// })-> whereNumber('id');

// Route::get('set/{letter}', function($letter){
//     return $letter;
// })->whereAlpha('letter');

// Route::get('set/{letterNumber}', function($letterNumber){
//     return $letterNumber;
// })->whereAlphaNumeric('letterNumber');


// //группируем маршруты, адреса которых начинаются на одинаковую часть. 
// Route::prefix('admin') -> group(function(){
//     Route::get('users', function(){
//         return 'all';
//     });

//     Route::get('user/{id}', function($id){
//         return $id;
//     });
// });

// //маршрутам можно давать имена
// Route::get('/post/all', function () {
//     return 'all';
// })->name('posts');

Route::prefix('/user')->group(function(){
    Route::match(['get', 'post'], '/add', [UserController::class, 'add']);
    Route::get('show', [UserController::class, 'show']);
});
