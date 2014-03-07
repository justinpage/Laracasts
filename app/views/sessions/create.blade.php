@extends('layouts.default')

@section('content')
	<h1>Login</h1>
	{{ Form::open(['route' => 'sessions.store']) }}

		<div>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</div>

		<div>
			{{ Form::label('password', 'Passowrd') }}
			{{ Form::password('password') }}
		</div>
	<div>{{ Form::submit('Login') }}</div>
	{{ Form::close() }}
@stop
