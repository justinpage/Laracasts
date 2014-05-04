{{ Form::open(['url' => '/tasks', 'class'  => 'form']) }}
	<div class="form-group {{ ($errors->first('title')) ? 'has-error' : '' }}">
		@if ($errors->first('title'))
		{{ Form::label($errors->first('title'), null, ['class' =>'control-label']) }}
		@else
		{{ Form::label('title', 'Title') }}
		@endif
		{{ Form::text('title', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group {{ ($errors->first('body')) ? 'has-error' : '' }}">
		@if ($errors->first('body'))
		{{ Form::label($errors->first('body'), null, ['class' =>'control-label']) }}
		@else
		{{ Form::label('body', 'Body:') }}
		@endif
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::label('user_id', 'Assign To:') }}
		{{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Create Task', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}
