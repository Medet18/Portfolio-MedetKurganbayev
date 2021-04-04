<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\CarsMod;
use App\Models\CLient1;

use App\Http\Controllers\CLient1Controller;
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

Route::get('/', function () {
    return view('welcome');
});//->name('welcome');

Route::get('/u',function(){
	return view('user');
});//->name('user');

Route::get('cv', function(){
	return view('Portfolio');
});
Route::get('/user',function(){
	return view('welcome');
});

Route::get('/test',function(){
	return view('test');
});
//////////////////////////
Route::get('post/create',function(){
    DB::table('post')->insert([
        'title'=>'DataBase',
        'body'=>'DB, MS SQL,MySql,PL SQL'
    ]);
});

Route::get('post/create',function(){
    DB::table('post')->insert([
        'title'=>'PHP',
        'body'=>'Laravel'
    ]);
});

Route::get('post',function(){
    $post = Post::find(4);
    return $post->body;
});
////defense//////////
Route::get('cars/create',function(){
    DB::table('_cars')->insert([
        'Owner'=>'Ricky',
        'Car_brand'=>'Dodge',
        'Volume'=>4
    ]);
});

Route::get('cars2',function(){
    $a = CarsMod::find(1);
    return $a;
});
/////clients table//////

Route::get('client1/add',function(){
    DB::table('clients1')->insert([
        'name'=>'Abylay',
        'lastname'=>'Omar',
        'age'=>30
    ]);

});
Route::get('client1',function(){
    $client1 =  Client1::find(1);
    return $client1;//->name;
});

////////////lab5555//////////////

Route::get('client2', [Client1Controller::class,'index']);