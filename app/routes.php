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


//Route for creating new customer in customers table
//based on 'practice-creating' route from Lecture 9 notes/Eloquent ORM:

Route::get('/add-customer', function() {

    #Instantiate new Customer model class
    $customer = new Customer();

    #Set (whatever that means)
    $customer->first_name = 'Jimmy';
    $customer->last_name = 'Jam';
    $customer->email = 'jimmy_jam@yahoo.com';
    $customer->address = '9 Oxford St. Brixton, UK 20135';
    $customer->phone = '(555) 555-5555';
    $customer->birthday = '04/18/1979';

    # This is where the Eloquent ORM magic happens
    $customer->save();

    return 'A new customer has been added! Check your database to see...';

});

//Route for creating new comic in comics table
//based on 'practice-creating' route from Lecture 9 notes/Eloquent ORM:

Route::get('/add-comic', function() {

    #Instantiate new comic model class
    $comic = new comic();

    #Set (whatever that means)
    $comic->title = 'Warlord of Mars';
    $comic->publisher = 'Dynamite';
    
    # This is where the Eloquent ORM magic happens
    $comic->save();

    return 'A new comic has been added! Check your database to see...';

});

//Route for log-in:

Route::get('/log-in', function() {



    #do something with this later, obviously

    echo 'log in on this page';


});

//Route for log-out:

Route::get('/log-out', function() {



    #do somethoutg with this later, obviously

    echo 'log out on this page';


});


//Route for practice reading in CRUD operations from Lecture 9 notes/Eloquent ORM

Route::get('/practice-reading', function() {

    # The all() method will fetch all the rows from a Model/table
    $customers = Customer::all();

    # Make sure we have results before trying to print them...
    if($customers->isEmpty() != TRUE) {

        # Typically we'd pass $customers to a View, but for quick and dirty demonstration, let's just output here...
        foreach($customers as $customer) {
            echo $customer->first_name.'<br>';
            echo $customer->last_name.'<br><br>';
        }
    }
    else {
        return 'No customers found';
    }

});


//Route for practice reading one specific customer in CRUD operations from Lecture 9 notes/Eloquent ORM

Route::get('/practice-reading-one-customer', function() {

    $customer = customer::where('first_name', 'LIKE', '%Garrett%')->first();

    if($customer) {
        return $customer->first_name . '<br>' . $customer->last_name;        
    }
    else {
        return 'customer not found.';
    }

});


//Route for practicing updating from Lecture 9 notes/Eloquent ORM

Route::get('/practice-updating', function() {

    # First get a customer to update
    $customer = customer::where('first_name', 'LIKE', '%Todd%')->first();

    # If we found the customer, update it
    if($customer) {

        # Give it a different title
        $customer->phone = '(555) 555-5444';

        # Save the changes
        $customer->save();

        return "Update complete; check the database to see if your update worked...";
    }
    else {
        return "customer not found, can't update.";
    }

});

Route::get('/practice-deleting', function() {

    # First get a customer to delete
    $customer = customer::where('first_name', 'LIKE', '%Jimmy%')->first();

    # If we found the customer, delete it
    if($customer) {

        # Goodbye!
        $customer->delete();

        return "Deletion complete; check the database to see if it worked...";

    }
    else {
        return "Can't delete - customer not found.";
    }

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

//Debug route from Lecture 8 notes:

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
?>
