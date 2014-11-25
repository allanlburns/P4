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

// test route for environment function from lecture 8 notes/environments:

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

//Trigger-error route as per lecture 8 notes/environments:

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

//MySQL test route from lecture 8 notes/database configuration:

#Specify namespace:
use Paste\Pre;

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
   echo Pre::render($results);
    # If Pre not installed use: print_r ($results);

});

?>
