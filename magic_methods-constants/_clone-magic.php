<?php

class Person
{
	public $name;
	private $phone;
	static $counter = 0;

	public function __construct($name, $phone)
	{
		$this->name = $name;
		$this->phone = $phone;
		self::$counter ++;
	}

	// executed after cloning is done, on the cloned object 
	public function __clone()
	{
		self::$counter ++;
	}

}

$firstPerson = new Person('Jane', 123456);

$newPers = clone $firstPerson;

var_dump(Person::$counter); // => 2