@extends('layouts.master')

@section('title')
	Add a new book
@stop

@section('content')

	<h1>Add a new book</h1>

	<form method='POST' action='/books/create'>
	    {{ csrf_field() }}
	    {{$errors->first('title') }} <br>
	    <input type='text' name='title' value='{{ old('title') }}'>
	    <input type='submit' value='Submit'>

#	<br>	
#	@foreach($errors->all() as $error)
#		{{ $error }}<br>
#	@endforeach


	@if(count($errors) > 0)
		Please correct errors above and try again
	@endif
	</form>

@stop
