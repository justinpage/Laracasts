@extends ('layouts.master')

@section('content')
	@if ($posts->count())
		@foreach($posts as $post)
			<div class='post'>
				<h2>{{ $post->title; }}</h2>
				<p>{{ $post->body; }} </p>
			</div>
			<hr />
		@endforeach
	@else
		<p>No posts returned.</p>
	@endif
@stop

