@extends('_master')
@section('title')
Add a New Comic
@stop
@section('content')

<h1>Add a new comic title to database here!</h1>
<p>Here admin can add a new comic title!


{{ Form::open(array('url' => '/add-comic')) }}

	<p>Title:</p>
	{{ Form::text('title') }}

	<p>Publisher:</p>
	{{ Form::text('publisher') }} <br>

	{{ Form::submit() }} 

{{ Form::close() }}


<p>

<br><br>


@stop

