<?php

class ParentClass
{
	public $property1 = '1';
	protected $property2 = '2';
	private $property3 = '3';
	const MY_CONSTANT = "MY_CONSTANT";
	public function getProp2()
	{
		return $this->property2;
	}
}

class ChildClass extends ParentClass
{
	// overriding properties from parent class
	public $property1 = '11';
	protected $property2 = '22';

	// constants can also be overwritten
	const MY_CONSTANT = "CHILD_CONSTANT";
	
	// you can add additional logic to the parent methods
	public function getProp2()
	{
		$result = $this->property2;
		return "The result is: $result";
	}

}

$obj = new ChildClass();
echo $obj->property1; // output => 11
echo $obj->getProp2(); // => 22
