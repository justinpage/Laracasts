@extends('layouts.master')

@section('content')
	<h1>Sign the Guest Book!</h1>
	
	{{ Form::open(['route' => 'guests.store']) }}
	<div>
		{{ Form::label('name', 'Your Name:') }}
		{{ Form::text('name', null, ['id' => 'name']) }}
	</div>
	<div>
		{{ Form::label('message', 'Your Message:') }}
		{{ Form::text('message', null, ['id' => 'message']) }}
	</div>
	<div>{{ Form::submit('Submit') }}</div>
	{{ Form::close() }}
@stop
