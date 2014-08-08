@extends('layouts.master')

@section('content')
	<h1>Daily Reports</h1>
	<canvas id="daily-reports" width="700" height="300"></canvas>

	<h1>Drill Down</h1>
	@foreach ($totals as $index => $dailyIncome)
		<li><strong>{{ $dates[$index] }}:</strong> ${{$dailyIncome }}</li>
	@endforeach
@stop

@section('js-footer')
	<script src='/js/vendor/chart.min.js'></script>

	<script>
		(function() {
			var ctx = document.getElementById('daily-reports').getContext('2d');
			var chart = {
				'labels': {{ json_encode($dates) }},
				'datasets': [{
					data: {{ json_encode($totals) }},
					fillColor: "#f8b1aa",
					strokeColor: "#bb574e",
					pointColor: "#bb574e"
				}]
			};
			new Chart(ctx).Line(chart, {bezierCurve: false});
		 })();
	</script>
@stop
