{{ '<?xml version "1.0" encoding="utf-8"?>' }}

<feed xmlns="http://www.w3.org/2005/Atom">
	<title>Laracasts</title>
	<subtitle>The best source of Laravel Training on the web.</subtitle>
	<link href='http://laravasts.com/feed' />
	<updated>{{ Carbon\Carbon::now()->toATOMString() }}</updated>
	<author>
		<name>Justin Page</name>
	</author>
	<id>tag:laracasts.com,{{ date('Y') }}:/feed</id>
	
	@foreach($lessons as $lesson)
		<entry>
			<title>{{ $lesson->title }}</title>
			{{ link_to_route('lessons.show', $lesson->slug) }}
			<id>...</id>
			<summary>{{ $lesson->excerpt }}</summary>
		</entry>
	@endforeach
</feed>
