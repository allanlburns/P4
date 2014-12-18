@extends('_master')
@section('title')
View Your Pull List
@stop
@section('content')

<h1>Your current pull list!</h1>


<?php

/*$comics = DB::table('comic_user')->where('first_name', 'LIKE', '%Allan%')->get(); 

	foreach($comics as $comic) {
            echo $comic->title . " " . "(id =" . $comic->id. ")".  '<br><br>';
    }*/

//$user = User::find(Auth::user()->id); 
//$comic = Comic::where()


/*$comics = DB::table('comic_user')->get(); //->where('publisher', 'LIKE', '%Marvel%')->get(); 

	foreach($comic_users as $comic_user) {
            echo $comic->title . '<br>';
    }

*/
?>


Click <a href='/pull-list/add'>here</a> to add a comic to your list. <br><br>

Click <a href='/pull-list/drop'>here</a> to drop a comic from your list. <br><br>

<?php


?>

<br><br>


@stop

