@extends('layouts.master')

@section('head')
	<meta charset='utf-8'>
	<link href='css/book/show.css' rel='sytlesheet'>
@stop

@section('title')
	Show book {{ $title }}
@stop

@section('content')
	@if(isset($title))
		<h1>Show book: {{ $title }}</h1>
	@else
		<h1> no book chosen</h1>
	@endif
@stop

@section('body')
	<script src="/js/book/show.js"></script>
@stop
