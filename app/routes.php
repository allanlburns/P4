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

// test route for environment function from lecture 8 notes:

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

//Trigger-error route as per lecture 8 notes:

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

?>
