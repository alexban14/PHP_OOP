<?php

class Car
{
	private $color = 'red';

	// we use static properties to associate them to the class itself
	//  we can access them by facade => Car::$availableColors (from outside)
	// 								=> self::$availableColors (from inside the class)
	static private $availableColors = ['red', 'green', 'blue', 'white'];
	
	public $weight;
	private $year;
	private $cylinderCapacity;
	private $price;
	public function __construct($cylinderCapacity, $price)
	{
		$this->cylinderCapacity = $cylinderCapacity;
		$this->price = $price;
	}

	// you can use static methods only for objects not classes itself
	public static function getAvColors() {
		return $this->availableColors;
	}

	// setter
	public function setYear($year)
	{
		$this->year = $year;
	}
	// getter
	public function getYear() {
		return $this->year;
	}
	// to validate the data we assign to object properties we create methods that do so
	public function setColor($color) {
		if (in_array($color, $this->availableColors)){
			$this->color = $color;
		}
	}

	public function getColor() {
		return $this->color;
	}

	public function __destruct()
	{
		"I am destroyed";
	}
	// ** you can use unset($object) to manually destruct instances
}

$myCar = new Car(3000, 10000);
$myCar->setYear(2010);
$carYear = $myCar->getYear();

// cloning objects
$yourCar = clone $myCar; // are not the same objects ($yourCar !== $myCar)
