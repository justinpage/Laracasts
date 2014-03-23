<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title></title>
	<style type='text/css'>
		.flash-message {
			border: 1px dotted black;
			padding: 1em;
		}

		.flash-alert { background: red; color: white; }
		.flash-info { background: #e3e3e3; color: black}
	</style>
</head>
<body>
	@include ('layouts/partials/_flash_message')

	<script src='http://code.jquery.com/jquery-2.1.0.min.js'></script>
	<script>
		$('div.flash-message').delay(4000).slideUp();
	</script>
</body>
</html>
