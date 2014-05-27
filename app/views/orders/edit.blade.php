@extends ('layouts.master')

@section('content')
	{{ Form::model($order, ['method' => 'PATCH', 'route' => ['orders.update', $order->id]]) }}
		<div>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</div>

		<div>
			{{ Form::label('price', 'Price:') }}
			{{ Form::text('price') }}
		</div>

		<div>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description') }}
		</div>

		<div>
			{{ Form::submit('Update Order') }}
		</div>
	{{ Form::close() }}
@stop

