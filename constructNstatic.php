<?php

class Car
{
	private $color = 'red';
	// we use static properties to associate them to the class itself
	//  we can access them by facade => Car::$availableColors (from outside)
	// 								=> self::$availableColors (from inside the class)
	static private $availableColors = ['red', 'green', 'blue', 'white'];

	private $cylinderCapacity;
	private $price;
	public function __construct($cylinderCapacity, $price)
	{
		$this->cylinderCapacity = $cylinderCapacity;
		$this->price = $price;
	}

	// you can use static methods only for objects not classes itself
	public static function getAvColors() {
		// return $this->availableColors; => throws an error
	}

	public function geColor() {
		return $this->color;
	}

	// to validate the data we assign to object properties we create methods that do so
	public function setColor($color) {
		if (in_array($color, $this->availableColors)){
			$this->color = $color;
		}
	}

}

// making a new instance of the car class constructed with the given properties
$myCar = new Car(3000, 10000);