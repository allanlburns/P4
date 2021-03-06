@extends('_master')
@section('title')
View Your Pull List
@stop
@section('content')

<h1>Drop a comic from your pull list here!</h1>


{{ Form::open(array('url' => '/pull-list/drop')) }}
	
	<h3>enter the comic id # to the right of the title you wish to drop and click "drop".</h3>
	
	<p>Comic:</p>
	{{ Form::text('comic_id') }}

	{{ Form::submit('drop') }} 

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
<?php

	$comics = DB::table('comics')->where('publisher', 'LIKE', '%DC%')->get(); 

	foreach($comics as $comic) {
            echo $comic->title . " " . "(id =" . $comic->id. ")".  '<br><br>';
    }
?>

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

