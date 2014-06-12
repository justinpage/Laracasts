<?php namespace Acme\Billing\Hooks;

use Log;
use App;
/* use Acme\Repositories\UserRepositoryInterface; */

class ChargedFailed {

	protected $repo;

	// public function __construct(UserRepositoryInterface $repo)
	// {
	// 	$this->repo = $repo;
	// }


	/**
	 * When a card fails to be charged...
	 * @param string $customer
	 */
	public function fire($customer)
	{
		$this->deactivateUser($customer);
	}

	/**
	* Deactivate the user
	* @param string $customer
	*/
	protected function deactivateUser($customer)
	{
		// // directly instantiating. Embracing repos and linking to Eloquent version
		// // diff. to swap out with a mock
		// $repo = new \Laracasts\Repositories\DbUserRepository;

		// downside is it is linked
		$repo = App::make('Acme\Repositories\UserRepositoryInterface');
		$user = $repo->byBillingId($customer);
		if (! $user) return;

		$repo->deactivate($user);

		Log::info('User has become deliquent', $user->toArray());
	}
}
