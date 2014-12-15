@extends('_master')
@section('title')
View Your Pull List
@stop
@section('content')

<h1>Drop a comic</h1>


Code to drop a comic:

{{ Form::open(array('url' => '/pull-list/drop')) }}

	<p>Comic:</p>
	{{ Form::text('comic_id') }}

	{{ Form::submit() }} 

{{ Form::close() }}


<p>

<br><br>


@stop

