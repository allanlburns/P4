@extends('_master')
@section('content')

<h1>Sign up</h1>

{{ Form::open(array('url' => '/signup')) }}

    First Name:<br>
    {{ Form::text('first_name') }}<br><br>

    Last Name:<br>
    {{ Form::text('last_name') }}<br><br>

    Email:<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    Address:<br>
    {{ Form::text('address') }}<br><br>

    Phone:<br>
    {{ Form::text('phone') }}<br><br>

    Birthday:<br>
    {{ Form::text('birthday') }}<br><br>
    

    {{ Form::submit('Submit') }}



{{ Form::close() }}




@stop

