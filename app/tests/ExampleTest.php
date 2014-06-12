<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}


	public function test_deactivate_user_upon_failed_charge()
	{
		$user = Factory::create('Acme\User', ['active' => 1, 'status' => 'paying']);

		App::make('Acme\Billing\Hooks\ChargeFailed')->fire($user->billing_id);

		// Let's make sure that the user has been deactivated
		$user = User::find($user->id);
		$this->assertEquals(0, $user->active);
		$this->assertEquals('canceled', $user->status);
	}

}
