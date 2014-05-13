<header>
	<h2>{{ link_to('/', 'Demos!') }}</h2>
	{{ Form::open() }}
		{{Form::input('search', 'q', null, ['placeholder' => 'Search...']) }}
	{{ Form::close() }}
	<ul>
		<li>{{ link_to('/', 'Home') }}</li>
	</ul>
</header>
