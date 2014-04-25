<?php


Route::get('/', function()
{
	/* dd(Config::get('mail.driver')); */
	dd(Config::get('database.default'));
});
