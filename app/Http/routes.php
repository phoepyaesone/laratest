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
//Route::model('song','App\Songs');
Route::bind('song',function( $slug )
{
	return App\Songs::where('slug',$slug)->first();
});


Route::get('/',function(){

	return view('default');
	//return View::make('default');

});


// Route::get('/','PagesController@index');
Route::get('about','PagesController@about');

//Route::get('/', 'WelcomeController@index');

Route::get('song','SongController@index');
Route::get('song/{song}', 'SongController@show');
get('song/edit/{song}', 'SongController@edit');

Route::get('test','TestController@index');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
