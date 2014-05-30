@extends('layouts.master')

@section('content')
	<h2>Reset your Password</h2>
	{{ Form::open([ 'route' => 'password_resets.postRemind' ]) }}
		<div>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', null, ['required' => true]) }}
		</div>

		<div>
			{{ Form::submit('Reset') }}
		</div>
	{{ Form::close() }}

	@if (Session::has('status'))
		<p>{{ Session::get('status') }}</p>
	@endif
@stop

