<?php

interface MyInterface
{
	// all methods inside an interface must be public
	public function method1();
	// can have constants, but cant be overwritten
	const NAME = 'MY_INTERFACE';
}

interface MyInterface2 extends MyInterface
{
	public function method2();
}

interface MyInterface3
{
	public function method3();
}

class MyClass implements MyInterface
{
	public $interfaceImplemented = self::NAME;
	public function method1(){
		// implementation details
	}
}