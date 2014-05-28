<aside class='sidebar'>
	<h2 class='heading-top'>Sidebar</h2>
	<ul>
		@foreach($tags as $tag)
			<li>{{ $tag }}</li>
		@endforeach
	</ul>
</aside>
