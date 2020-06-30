<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Student;
use App\Course;
use App\Comment;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontController@index');
// Route::get('insert/save',function(){
//     $insert = new Post;
//     $insert->title="this is title5";
//     $insert->body="this is body5";
//     $insert->save();

//     return"inserted successfully!";
    
// });
// Route::get('findwhere',function() {
//     $result=Post::withTrashed()->where('id','2')->restore();
//     return $result;
// });
// Route::get('update/save', function(){
//     $result=Post::find('2');
//      $result->title="title updated";
//      $result->save();
// });

// Route::get('updates', function () {
//     Post::where('id', 4)->update(['title'=>'title for update', 'body'=>'vidhi is best programmer']);
//     return "this is update route";
// });

// Route::get('deletes', function () {
//     $post = Post::where('id',5)->delete();
// });

// Route::get('softdelete', function () {
//     Post::find(2)->delete();
// });

// Route::get('inserted/save',function(){
//     $insert = new Post;
//     $insert->title="this is title";
//     $insert->body="this is bodynnn  ";
//     $insert->save();

//     return"insert successfully!";
    
// });
// Route::get('check','NewController@check');
// Route::get('search/{id}','NewController@search');

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

// Route::view('userview','form');
// Route::get('usercontroller','UserController@data');



// Route::get('view1','NavController@view1');
// Route::get('view2','NavController@view2');
// Route::get('view3','NavController@view3');
// Route::get('view4','NavController@view4');
// Route::get('view5','NavController@view5');
// Route::get('view6','NavController@view6');

// Route::view('userview','post');
// Route::view('comment','comment');
// Route::post('PostController','PostController@data');
// Route::get('list/{id}','PostController@list');



Route::resource('post','PostsController');

