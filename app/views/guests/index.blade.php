@extends('layouts.master')

@section('content')
	<h1>Guest Book</h1>
	@foreach($guests as $guest)
	<article>
		<h3>{{ $guest->name }}</h3>
		<p>{{ $guest->message }}</p>
	</article>
	@endforeach
@stop
