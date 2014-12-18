@extends('_master')
@section('title')
Update Your Profile
@stop
@section('content')

<h1>Update Your information</h1>

<p>You must fill ALL fields or they will be saved as blank!

{{ Form::open(array('url' => '/profile/update')) }}

First Name:<br>
    {{ Form::text('first_name') }} {{ Form::submit('Update') }}<br><br>

    Last Name:<br>
    {{ Form::text('last_name') }}  {{ Form::submit('Update') }}<br><br>

    Email:<br>
    {{ Form::text('email') }}  {{ Form::submit('Update') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}  {{ Form::submit('Update') }}<br><br>

    Address:<br>
    {{ Form::text('address') }}  {{ Form::submit('Update') }}<br><br>

    Phone:<br>
    {{ Form::text('phone') }}  {{ Form::submit('Update') }}<br><br>

    Birthday:<br>
    {{ Form::text('birthday') }}  {{ Form::submit('Update') }}<br><br>

    Your Store:<br>
    {{ Form::text('store_id') }}  {{ Form::submit('Update') }}<br><br>

{{ Form::close() }}



@stop

