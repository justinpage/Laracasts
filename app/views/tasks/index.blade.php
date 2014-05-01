@extends('layouts.master')

@section('content')
	<h1>All Tasks</h1>
	<ul class='list-group'>
		@foreach($tasks as $task)
			<li class="list-group-item">{{ link_to("tasks/$task->id", $task->title) }}</li>
		@endforeach
	</ul>
@stop
