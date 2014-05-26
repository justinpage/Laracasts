<header>
	<h2>{{ link_to('/posts', 'Demos!') }}</h2>
	{{ Form::open(['method' => 'GET']) }}
		{{Form::input('search', 'q', null, ['placeholder' => 'Search...']) }}
	{{ Form::close() }}
	<ul>
		<li>{{ link_to('/posts', 'Home') }}</li>
	</ul>
</header>
