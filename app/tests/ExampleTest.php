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

	protected function tearDown()
	{
		Mockery::close();
	}


	public function test_deactivate_user_upon_failed_charge()
	{
		// migrated an integration test to an isolated unit test

		// current setup is an integration test. Something that touches the databaseo

		// this is no longer an integration test, we don't need a real user
		/* $user = Factory::create('Acme\User', ['active' => 1, 'status' => 'paying']); */
		// anonymous mocked object
		$user = Mockery(['toArray' => []));

		// let's pull in Mockery to mock an object. Use a Mock for the instance
		$mock = Mockery::mock('Acme\Repositories\UserRepositoryInterface');
		$mock->shouldReceive('byBillingId')->once()->andReturn($user);
		$mock->shouldReceive('deactivate')->with($user)->once();
		App::instance('Acme\Repositories\UserRepositoryInterface', $mock);

		(new Acme\Billing\Hooks\ChargedFailed)->fire('foo');
		// tests wil be faster

		// our metric for testing an object is no longer dependant on
		// accessing the database because we mocked the object. We do not need to verify
		// if these are updated. Our metric is if those methods are called.
		// we can assume that the repository will have its own test, so we don't have to double
		// up on our testing. Testing this class in complete isolation
		// Let's make sure that the user has been deactivated
		// $user = User::find($user->id);
		// $this->assertEquals(0, $user->active);
		// $this->assertEquals('canceled', $user->status);
	}

}
