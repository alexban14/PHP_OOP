<?php

abstract class Shape
{
	public $color;
	public function __construct($color)
	{
		$this->color = $color;
	}

	abstract public function getArea(): float;
}

// class Triangle extends Shape
// {
// 	public function getArea(): float
// 	{

// 	}
// }

class Circle extends shape
{
	public $radius;
	public function __construct($color, $radius)
	{
		parent::__construct($color);
		$this->radius = $radius;
	}
	public function getArea(): float
	{
		return $this->radius * $this->radius * 3.1;
	}
}

class Rectangle extends Shape
{
	public $length;
	public $width;
	public function __construct($color, $length, $width)
	{
		parent::__construct($color);
		$this->length = $length;
		$this->width = $width;
	}
	
	public function getArea(): float
	{
		return $this->length * $this->width;
	}
}

$t = new Rectangle('red', 10, 5);
$c1 = new Circle('red', 5);