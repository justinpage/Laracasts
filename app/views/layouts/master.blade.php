<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
	<link href='{{ URL::asset('css/main.css'); }}' rel='stylesheet' />
</head>
<body>
	<div class='container wrap'>
		@include ('layouts.partials.nav')
		<div class='content'>
			@yield ('content')
		</div>
	@include ('layouts.partials.footer')
	</div>
</body>
</html>
