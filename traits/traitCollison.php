<?php

trait FlyableTrait {
	abstract public function fly();
	public function hello()
	{
		echo "I can fly";
	}
}

trait EngineTrait {
	public function hello()
	{
		echo "I have an engine";
	}
}

class Plane
{
	// solving trait collision
	use FlyableTrait, EngineTrait {
		FlyableTrait::hello insteadof EngineTrait::hello;
		EnigneTrait::hello as engineHello;
	}

	public function fly()
	{
		echo "I am flying at 800 km/h";
	}
}