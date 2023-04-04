<?php

class Person
{
	public $name = 'Jane';
	private $phone = 123456;

	// when we need to call instanciated objects as functions
	public function __invoke()
	{

		return "Object was called as a function";
	}
}

$firstPerson = new Person();

var_dump(is_callable($firstPerson));
echo $p();
