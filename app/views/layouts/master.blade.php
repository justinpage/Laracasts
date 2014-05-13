<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
	<link href='css/main.css' rel='stylesheet' />
</head>
<body>
	<div class='container wrap'>
		@include ('layouts.partials.nav')
		@include ('layouts.partials.sidebar')
		<div class='content'>
			@yield ('content')
		</div>
	@include ('layouts.partials.footer')
	</div>
</body>
</html>
