<?php

class Car
{
	public $color;
	public $manufacturer;
	// immutable variables
	const MY_CONSTANT = [];

	const MANUFACTURER_BMW = 'BMW';
	const MANUFACTURER_TESLA = 'tesla';
	const MANUFACTURER_MERCEDES = 'mercedes';

	const COLOR_RED = 'red';
	const COLOR_GREEN = 'green';
	const COLOR_BLUE = 'blue';

	public function __construct($color, $manufacturer)
	{
		$this->color = $color;
		$this->manufacturer = $manufacturer;
	}
}

// access constants
Car::MY_CONSTANT;

// typo prone way of instancing an object
$myCar = new Car('red', 'mercedes');

// safer option to pass the class constants as arguments
$myCar = new Car(Car::COLOR_BLUE, Car::MANUFACTURER_TESLA);
