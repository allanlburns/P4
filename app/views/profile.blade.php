@extends('_master')
@section('title')
Your Profile
@stop
@section('content')

<h1>Your information</h1>

<?php

	/*$users = DB::table('users')->where(array('user_id'=> Auth::user()->id))->get(); 

	echo $user->first_name . "<br>";*/
    
?>

<br><br>

<a href='/profile/delete'>Delete profile</a>


@stop

