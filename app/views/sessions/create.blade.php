<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
    <title>Create Sessions</title>
</head>
<body>
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
</body>
</html>
