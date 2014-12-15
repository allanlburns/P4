@extends('_master')
@section('title')
View Your Pull List
@stop
@section('content')

<h1>Your current pull list!</h1>

Click <a href='/pull-list/add'>here</a> to add a comic to your list. <br><br>

Click <a href='/pull-list/drop'>here</a> to drop a comic from your list. <br><br>


<!--   foreach($comics as $comic) {
            echo $comic->title.'<br>'; -->
        


<br><br>


@stop

