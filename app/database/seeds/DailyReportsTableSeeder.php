<?php

use Carbon\Carbon;

class DailyReportsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('reports_daily');
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 04, 11)->toDateTimeString(),
			'amount' => 125,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 05, 11)->toDateTimeString(),
			'amount' => 321,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 06, 11)->toDateTimeString(),
			'amount' => 419,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 07, 11)->toDateTimeString(),
			'amount' => 53,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 08, 11)->toDateTimeString(),
			'amount' => 0,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 09, 11)->toDateTimeString(),
			'amount' => 225,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 10, 11)->toDateTimeString(),
			'amount' => 621,
		]);
		
		DailyReports::create([
			'date' => Carbon::createFromDate(2013, 11, 11)->toDateTimeString(),
			'amount' => 419,
		]);
	}
}
