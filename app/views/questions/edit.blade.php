<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>create</title>
</head>
<body>
	<h1>Update a Question</h1>
	{{ Form::open(['method' => 'PATCH', 'url' => 'questions/1']) }}
	<div>
		{{ Form::label('title') }}
		{{ Form::text('title') }}
	</div>

	<div>
		{{ Form::submit('Submit') }}
	</div>
	{{ Form::close() }}
</body>
</html>
