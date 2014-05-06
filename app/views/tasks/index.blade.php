@extends('layouts.master')

@section('content')
	<div class="row">
		<div class='col-md-6'>
			<h1>All Tasks</h1>
			<ul class='list-group'>
				@foreach($tasks as $task)
				<li class="list-group-item {{ ($task->completed) ? 'completed' : ''}}">
						<a href="/{{ $task->user->username }}/tasks">
							{{ gravatar_tag($task->user->email, $task->user->username) }}
						</a>
						{{ link_to_task($task) }}

						{{ link_to(null, 'Delete', ['class' => 'task-delete-form btn btn-xs btn-danger', 'data-task-id' => $task->id]) }}

						{{ Form::model($task, ['class' => 'task-update-form', 'method' => 'POST', 'route' => ['tasks.update', $task->id]]) }}
							{{ Form::checkbox('completed') }}
						{{ Form::close() }}

					</li>
				@endforeach
			</ul>
		</div>
		<div class='col-md-6'>
			@if (isset($users))
				<h3>Add New Task</h3>
				@include('tasks/partials/_form')
			@endif
		</div>
	</div>
@stop

@section('js')
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
	<script type='text/javascript'>
		$('form.task-update-form input').click(function() {
			var form = $(this).parent();
			var checked = $(this).prop('checked');
			var completed = checked ? 1 : 0;

			$.ajax({
				url: $(form).attr('action'),
				data: {'completed': completed},
				type: 'POST',
				success: function (res) { console.log(res); },
				error: function (res) { console.log(res); }
			});

			var displayClass = checked ? form.parent().addClass('completed') : form.parent().removeClass('completed');
		});

		$('a.task-delete-form').click(function(event) {
			var task_id = $(this).data('task-id');
			if (confirm("Would you like to delete the current task?")) {
				$.ajax({
					url: '/tasks/delete',
					data: { '_method': 'DELETE', 'task_id': task_id},
					type: 'POST',
					success: function (res) { console.log(res); },
					error: function (res) { console.log(res); }
				});

				$(this).parent().hide();
			}
			event.preventDefault();

			return false;
		});
	</script>
@stop
