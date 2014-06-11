<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8' />
{{ HTML::style('css/main.css') }}
</head>
<body>
<div class='container wrap'>
	@include ('layouts.partials.nav')
	<div class='content'>
		@if (Session::has('flash_message'))
		<div class='flash-message'>
			<p>{{ Session::get('flash_message') }}</p>
		</div>
		@endif
		@yield ('content')
	</div>
	@include ('layouts.partials.footer')
</div>
</body>
</html>
