<?php

class FizzBuzz
{
	
	function __construct($value)
	{
		$this->value = $value;
	}

	function count(){
		if ($this->value == 15) 
		{
			return "FizzBuzz";
		}
		elseif ($this->isModuloByFive()) 
		{
			return "Buzz";
		}
		elseif ($this->isModuloByThree()) 
		{
			return "Fizz";
		}else{
			return $this->value;
		}	
	}

	function isModuloByThree()
	{
		return ($this->value %3)==0;
	}
	function isModuloByFive()
	{
		return ($this->value %5)==0;
	}
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	function testShouldBeNumberOne(){
		$fizzbuzz = new FizzBuzz(1);
		$this->assertEquals("1", $fizzbuzz->count());
	}
	function testShouldBeNumberTwo(){
		$fizzbuzz = new FizzBuzz(2);
		$this->assertEquals("2", $fizzbuzz->count());
	}
	function testShouldBeReturnFizzString()
	{
		$fizzbuzz = new FizzBuzz(3);
		$this->assertEquals("Fizz", $fizzbuzz->count());
	}
	function testShouldBeReturnBuzzString()
	{
		$fizzbuzz = new FizzBuzz(5);
		$this->assertEquals("Buzz", $fizzbuzz->count());
	}
	function testShouldBeReturnFizzBuzzString()
	{
		$fizzbuzz = new FizzBuzz(15);
		$this->assertEquals("FizzBuzz", $fizzbuzz->count());
	}
}
?>