@extends('_master')
@section('title')
Add a Comic to Your Pull List
@stop
@section('content')

<h1>Add a new comic to your pull list here!</h1>


{{ Form::open(array('url' => '/pull-list/add')) }}

	<p>Comic:</p>
	{{ Form::text('comic_id') }}

	<p>Customer:</p>
	{{ Form::text('user_id') }} <br>

	{{ Form::submit() }} 

{{ Form::close() }}


<p>

<br><br>


@stop

