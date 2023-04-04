<?php

class Person
{
	public $name;
	protected $age;
	private $phone;

	public function __construct($name, $age, $phone)
	{
		$this->name = $name;
		$this->age = $age;
		$this->phone = $phone;
	}
	public function hello()
	{
		return "Hello from person";
	}

	// final keyword makes so the property/method can not be inherited
	final function getAge()
	{
		return $this->age;
	}
}

class Employee extends Person
{
	private $salary;

	public function __construct($name, $age, $phone, $salary)
	{
		parent::__construct($name, $age, $phone);
		$this->salary = $salary;
	}
	
	public function hello()
	{
		return "Hello from $this->name";
	}
}

$john = new Employee('John', 30, 0349593342, 150000);