<?php

require_once 'Ioc.php';

class Foo {

	protected $bar;

	public function __construct(Bar $bar)
	{
		$this->bar = $bar;
	}
}

class Bar {}

IoC::bind('Foo', function()
{
	return new Foo(new Bar);
});

// App::bind('foo', function()
// {
// 	// dependency injection container
// 	// as we grow to build more maintanable and testable features,
// 	// we need to inject our classes. Dependency injection containers
// 	// house our instantiation
//
// 	// new instance of Foo is created that contains a new reference of Bar
// 	return new Foo(new Bar);
// });

/* App::make('foo'); */

$foo = IoC::make('Foo');

var_dump($foo);
