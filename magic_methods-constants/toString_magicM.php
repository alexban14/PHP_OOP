<?php

class Person
{
	public $name = 'Jane';
	private $phone = 123456;
	public function __construct()
	{
		echo "__construct is called" . PHP_EOL;
	}

	public function __destruct()
	{
		echo "__destruct is called" . PHP_EOL;
	}

	public function __toString()
	{
		return "Name: $this->name. Phone: $this->phone";
	}
}

$firstPerson = new Person();

// prints an error because we try to print an object as a string (solution __toString() magic method)
echo $firstPerson;