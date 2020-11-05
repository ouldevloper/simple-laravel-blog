<?php
use App\Post;
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
    return view('home');
});

Route::get('Add',"PostController@addPost")->middleware('auth');
Route::post('Add',"PostController@addPost")->middleware('auth');
Route::get('Edit/{id}',"PostController@updatePost")->middleware('auth');
Route::post('Edit/{id}',"PostController@updatePost")->middleware('auth');
Route::get("Publicity","PostController@display")->middleware('auth');
Route::get('Delete/{id}',function($id){
    $post=Post::find($id);
    $post->Delete();
    return Redirect("Publicity");
})->middleware('auth');
Route::post('/addComment',"CommentController@addComment")->middleware('auth');

Route::get('/',"PostController@posts");
Route::get('/home','PostController@posts');
Route::get('/post/{id}','PostController@post');
Route::get('/profile/{id}','UserController@profile');
Route::get('/About',function(){
    return view('about');
});
Route::get('/about',function(){
    return view('about');
});

Auth::routes();




