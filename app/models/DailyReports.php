<?php

class DailyReports extends \Eloquent {
	protected $fillable = ['date', 'amount'];

	protected $table = 'reports_daily';
}
