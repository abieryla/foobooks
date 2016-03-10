<?php

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

	Route::get('/', function () {
            #return view('welcome');
            return 'Hello welcome to my Laravel application!';
        });
        
        Route::get('/public/books', 'bookController@getIndex'); 
        
	Route::get('/public/book/create', 'bookController@getCreate'); 
	
	Route::post('/public/book/create', 'bookController@postCreate'); 

        Route::get('/public/book/{id}', 'bookController@getShow'); 
});
