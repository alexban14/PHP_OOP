<?php

class Person
{
	public $name = 'Jane';
	private $phone = 123456;

	// when we want to access an existing property of the object
	public function __get($propName)
	{
		if ($propName === 'username') {
			return $this->name;
		}
		return "Property name \"$propName\" does not exist"	;		
	}

	// when we want to assign something to an existing property of the object
	public function __set($propName, $value)
	{
		if ($propName === 'username') {
			$this->name = $value;
		}	
	}

	// when we want to call existing method from the object
	public function __call($name, $arguments) // arguments = array of arguments passed
	{
		if ($name === 'getMobilePhone') {
			return $this->getPhone();
		} else if ($name === 'setMobliePhone') {
			// $this->setPhone($arguments[0]); => use one argument from the array
			// pass all arguments to setPhone method
			call_user_func_array([$this, 'setPhone'], $arguments);
		}
	}

	// executed when trying to access static properties
	public static function __callStatic($method, $args)
	{
		echo "\"$method\" static method was called";
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
	}
}

$firstPerson = new Person();

// calling the get magic method
$firstPerson->username;

// calling the set magic method
$firstPerson->username = "Marry";

// call magic method to get a value
$firstPerson->getMobilePhone();
// call magic method to set a value
$firstPerson->setMobilePhone(789012);

// calling a static property via a the callStatic method
Person::hello();