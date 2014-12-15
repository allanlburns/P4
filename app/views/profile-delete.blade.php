@extends('_master')
@section('title')
Delete Your Profile
@stop
@section('content')

<h1>Delete Your Profile</h1>


Are you sure you want to delete your profile?

<p><a href='/profile'>NO</a>, get me out of here!

<p>Yes, I'd like to delete my profile.<br>

{{ Form::open(array('url' => '/profile/delete')) }}

{{ Form::submit() }}

<br><br>


@stop

