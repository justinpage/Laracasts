<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<style>.flash { padding: 1em; border: 1px dotted black;}</style>
</head>
<body>
	
	@if (Session::get('flash_message'))
		<div class='flash'>
			{{ Session::get('flash_message') }}	
		</div>
	@endif

	<div class='container'>
		@yield('content')
	</div>
</body>
</html>
