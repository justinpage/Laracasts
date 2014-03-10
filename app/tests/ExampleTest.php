<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testIndex()
	{
		$this->call('GET', '/');
		$this->assertResponseOk();
	}

	public function testBasicExample()
	{
		$this->call('POST', 'buy');
		$this->assertRedirectedToRoute('home', null, ['flash_message' => 'Foo']);
	}

	public function testAbout()
	{
		$this->call('GET', 'about');

		$this->assertViewHas('tags');
	}

}
