<?php

use App\Thread;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('stars');
});

Route::get('/test', function () {
    return view('hometest');
});

Route::get('/twitter', function()
{
    return Twitter::getUserTimeline(['screen_name' => 'tylerhamsen', 'count' => 20, 'format' => 'json']);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::any('/home', 'HomeController@index');

    Route::any('/forum', 'HomeController@forum');

    Route::any('/new', 'HomeController@newThread');
 
    Route::any('/singleThread/{id}', 'HomeController@singleThread');

    Route::any('/singleThread/{id}', 'HomeController@newReply');

    Route::any('/weather', 'HomeController@weather');

    Route::any('/news', 'HomeController@news');

    Route::any('/solarsystem', 'HomeController@solarsystem');

    Route::any('/categories', 'HomeController@categories');

    Route::any('/categories/{cat}', 'HomeController@forumByCat');

    Route::any('/destroy/{id}', 'HomeController@destroy');

});
