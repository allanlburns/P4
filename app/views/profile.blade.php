@extends('_master')
@section('title')
Your Profile
@stop
@section('content')

<h1>Your information</h1>

<?php $user = User::find(Auth::user()->id); ?>

<p> First Name:				<?php echo $user->first_name . '<br>'; ?>
<p>	Last Name:				<?php echo $user->last_name . '<br>'; ?>
<p>	E-mail:					<?php echo $user->email . '<br>'; ?>
<p>	Address:				<?php echo $user->address . '<br>'; ?>
<p> Phone Number:   		<?php echo $user->phone . '<br>'; ?>
<p> Birthday (MM/DD/YYYY):  <?php echo $user->birthday . '<br>'; ?>
    	


<br><br>

<a href='/profile/update'>Update profile</a><br>

<a href='/profile/delete'>Delete profile</a><br>


@stop

