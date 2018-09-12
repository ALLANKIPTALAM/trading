<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/comingsoon', function () {
    return view('comingsoon');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/Articles', function () {
//     return view('Articles');
// });
Route::get('/Articles', 'IndexController@indexarticles'); //posts or Article list page
Route::get('/Article/show/{id}', 'IndexController@showArticle')->name('Article.show');

Route::auth();

//Route::get('/home', 'HomeController@index');
Route::get('/post/create', 'PostController@create')->name('post.create');



Route::post('/comment/store', 'CommentController@store')->name('comment.add'); //to add comment
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add'); //to store replies


Route::auth();

//Route::get('/home', 'HomeController@index');
Route::get('Admin/dashboard', 'HomeController@index'); //To take the logged in admin to the dashboard
Route::get('Admin/Article_write', 'HomeController@article_write'); //To take the logged in admin to the dashboard
Route::post('Admin/Article/store', 'PostController@store');
Route::get('Admin/Articles', 'PostController@articles'); //posts or Article list page
//Route::auth();

//Route::get('/home', 'HomeController@index');
