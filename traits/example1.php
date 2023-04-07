<?php

trait MyTrait {
	public function fly()
	{
		echo 'I am flying';
	}
}

class Plane
{
	// you can not create objects directly from the trait
	// you need to use the trait inside the class
	use MyTrait;
}

class Helicopter
{
	use MyTrait;
}

$plane = new Plane();
$heli = new Helicopter();
$plane->fly();
$heli->fly();