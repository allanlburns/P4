@extends('_master')
@section('title')
Your Profile
@stop
@section('content')

<h1>Your information</h1>

<?php

	$user = User::find(3);

		//foreach ($users as $user) {
			echo $user->first_name . '<br>';
			echo $user->last_name . '<br><br>';
		//}
    
?>

<br><br>

<a href='/profile/delete'>Delete profile</a>


@stop

