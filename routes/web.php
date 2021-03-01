<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
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