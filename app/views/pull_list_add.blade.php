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

<br><br>

<h3>Marvel</h3>
<?php

	$comics = DB::table('comics')->where('publisher', 'LIKE', '%Marvel%')->get(); 

	foreach($comics as $comic) {
            echo $comic->title . " " . "(id =" . $comic->id. ")".  '<br><br>';
    }
?>

<h3>DC</h3><br>


<h3>Image</h3>

<?php

	$comics = DB::table('comics')->where('publisher', 'LIKE', '%Image%')->get(); 

	foreach($comics as $comic) {
            echo $comic->title . " " . "(id =" . $comic->id. ")".  '<br><br>';
    }
?>

<h3>IDW</h3>
<?php

	$comics = DB::table('comics')->where('publisher', 'LIKE', '%IDW%')->get(); 

	foreach($comics as $comic) {
            echo $comic->title . " " . "(id =" . $comic->id. ")".  '<br><br>';
    }
?>



<br><br>


@stop

