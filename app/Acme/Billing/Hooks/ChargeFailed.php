<?php namespace Acme\Billing\Hooks;

use Log;

class ChargedFailed {

	/**
	 * When a card fails to be charged...
	 * @param string $customer
	 */
	public function fire()
	{
		$this->deactivateUser($customer);
	}

	/**
	* Deactivate the user
	* @param string $customer
	*/
	protected function deactivateUser($customer)
	{
		$repo = new \Laracasts\Repositories\DbUserRepository;
		$user = $repo->byBillingId($customer);
		if (! $user) return;

		$repo->deactivate($user);
	}
}
