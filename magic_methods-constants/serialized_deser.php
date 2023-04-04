<?php

class Person
{
	public $name;
	private $phone;

	public function __construct($name, $phone)
	{
		$this->name = $name;
		$this->phone = $phone;
	}

	// unset some connections/resources on serialization
	public function __sleep()
	{
		// properties to be excluded from serialization
		unset($this->phone);
		return ['name'];
	}

	// reconnect/ reset resources
	public function wakeUp()
	{
		echo "I am awake";
	}
}

$firstPerson = new Person('Jane', 123456);

$serializedPers = serialize($firstPerson);
$unSerializedPers = unserialize($serializedPers);

// unSerializedPers !== firstPerson