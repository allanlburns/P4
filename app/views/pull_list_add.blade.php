@extends('_master')
@section('title')
Add a Comic to Your Pull List
@stop
@section('content')

<h1>Add a new comic to your pull list here!</h1>


{{ Form::open(array('url' => '/pull-list/add')) }}
	
	<h3>enter the comic id # to the right of the title you wish to and and hit "submit query".</h3>
	
	<p>Comic:</p>
	{{ Form::text('comic_id') }}

	{{ Form::submit() }} 

{{ Form::close() }}

<?php

	$comics = DB::table('comics')->where('publisher', 'LIKE', '%Image%')->get(); 

	foreach($comics as $comic) {
            echo $comic->title . " " . "(id =" . $comic->id. ")".  '<br><br>';
    }
?>


<p>

<br><br>


@stop

