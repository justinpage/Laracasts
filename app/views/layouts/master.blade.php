<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
	<link href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' rel='stylesheet' />
	<style>
		a { color: #132B40; }
		li img {margin-right: 1em; }
		.completed { background: #8acc6e; }
		.task-update-form { position: absolute; right: 10em; top: 1.3em;}
		.task-delete-form {position: relative; float: right; margin-top: 0.5em; }
	</style>
</head>
<body>
	<div class='container col-md-6 col-md-offset-3'>
		@yield('content')

	</div>
	@if ($task)
		@yield('js')
	@endif
</body>
</html>
