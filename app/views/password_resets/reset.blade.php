@extends('layouts.master')

@section('content')
	<h2>Reset Your Password Now</h2>
	{{ Form::open() }}
		{{ Form::hidden('token', $token) }}
		<div>
			{{ Form::label('email', 'Email Address: ') }}
			{{ Form::text('email') }}
		</div>

		<div>
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password') }}
		</div>
		<div>
			{{ Form::label('password_confirmation', 'Password Confirmation:') }}
			{{ Form::password('password_confirmation') }}
		</div>
		<div>
			{{ Form::submit('Create New Password') }}
		</div>
	{{ Form::close() }}

	@if (Session::has('error'))
		<p>{{ Session::get('error') }}</p>
	@endif
@stop
