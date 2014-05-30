@extends ('layouts.master')

@section('content')
	<div class='order'>
		<div class='post'>
			<h2>Login</h2>
		</div>
		{{ Form::open(['route' => 'sessions.store']) }}

			<div>
				{{ Form::label('username', 'Username:') }}
				{{ Form::text('username') }}
			</div>

			<div>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password') }}
			</div>
		<div>
			{{ Form::submit('Login') }}
			{{ link_to_route('password_resets.getRemind', 'Forgot your password?') }}
		</div>
		{{ Form::close() }}
	</div>
@stop
