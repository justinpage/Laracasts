{{ Form::open(['method' => 'delete', 'route' => ['questions.destroy', 1]]) }}
	{{ Form::submit('Delete') }}	
{{ Form::close() }}
