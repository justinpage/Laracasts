@extends('layouts.default')

@section('content')
	<h1>Create a New User</h1>
		{{ Form::open(['route' => 'users.store']) }}
		<div>
				{{ Form::label('username', 'Username: ') }}
				{{ Form::text('username') }}	
				{{ $errors->first('username', '<span class=error>:message</span>') }}
		</div>

		<div>
				{{ Form::label('email', 'Email: ') }}
				{{ Form::text('Email') }}	
		</div>
		<div>
				{{ Form::label('password', 'Password: ') }}
				{{ Form::password('password') }}	
				{{ $errors->first('password', '<span class=error>:message</span>') }}
		</div>
		<div>{{ Form::submit('Create User') }}</div>
	{{ Form::close() }}
@stop
	
