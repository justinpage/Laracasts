<?php

Route::get('/', function()
{
	(new Acme\Billing\StripeBilling)->bill();
});
