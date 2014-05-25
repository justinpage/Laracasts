<?php

class Foo {
	protected $bar;

	public function __construct(Bar $bar)
	{
		$this->bar = $bar;
	}

	public function fire()
	{
		return $this->bar->doIt([]);
	}
}

class Bar {
	public function doIt(array $thing)
	{
		return 'doing it';
	}
}

class ExampleTest extends TestCase {

	public function tearDown()
	{
		Mockery::close();
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$bar = Mockery::mock('Bar');
		$bar->shouldReceive('doIt')->once()->with([])->andReturn('mocked');

		$foo = new Foo($bar);
		$output = $foo->fire();

		/* $this->assertEquals('mocked', $output); */
	}

}
