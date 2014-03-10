{{ Form::open(['url' => 'support/store']) }}
	<div>
		{{ Form::label('email', 'Your Email:') }}
		{{ Form::text('email') }}
	</div>
	<div>
		{{ Form::label('body', 'Your Message:') }}
		{{ Form::text('body') }}
	</div>
	<div>
		{{ Form::submit('Contact Support') }}
	</div>
{{ Form::close() }}
