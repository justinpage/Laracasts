<?php
App::bind('BillingInterface', 'Checker');

App::make('BillingInterface');

interface BillingInterface {
	public function bill();
	public function retrieveCustomer();
	public function cancel();
}

class Checker implements BillingInterface {

	public function billing()
	{

	}

	public function retrieveCustomer()
	{

	}
	public function cancel()
	{

	}

}

class Stripe implements BillingInterface {

	public function billing()
	{

	}

	public function retrieveCustomer()
	{

	}
	public function cancel()
	{

	}
}
