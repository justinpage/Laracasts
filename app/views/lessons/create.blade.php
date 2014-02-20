<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>Create a New Lesson</title>
</head>
<body>
	<h1>Create a New Lesson</h1>
	{{ Form::open(array('route' => 'lessons.store')) }}
		<ul>
			<li>
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title') }}
				{{ $errors->first('title', '<span class=error>:message</span>') }}
			</li>

			<li>
				{{ Form::label('body', 'Body:') }}
				{{ Form::textarea('body') }}
				{{ $errors->first('body', '<span class=error>:message</span>') }}
			</li>

			<li>
				{{ Form::label('video_src', 'Video src:') }}
				{{ Form::text('video_src') }}
				{{ $errors->first('video_src', '<span class=error>:message</span>') }}
			</li>

			<li>
				{{ Form::submit() }}
			</li>
		</ul>
	{{ Form::close() }}
</body>
</html>
