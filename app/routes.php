<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return "Hello world";
	return View::make('index');
});

/*Route::get('/lorem', function()
{
	return View::make('lorem');

});

Route::post('/lorem', function()
{
	return View::make('lorem');

});

Route::get('/user-gen', function()
{

	return View::make('user-gen');
});

Route::post('/user-gen', function()
{
	return View::make('user-gen');
});*/

?>
