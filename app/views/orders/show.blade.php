@extends ('layouts.master')

@section('content')
	@if ($order->count())
		<div class='order'>
			<a href='{{ link_to_route('orders.show', null, ['id' => $order->id]) }}'>
				<img src='{{ $order->image; }}' alt='{{ $order->title; }}' />
			</a>
			<h2>{{ $order->title; }}</h2>
			<p>{{ $order->description; }} </p>
		</div>
		<hr />
	@else
		<p>No orders found.</p>
	@endif
@stop

