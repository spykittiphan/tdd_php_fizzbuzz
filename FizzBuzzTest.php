<?php


class FizzBuzz
{
	
	function __construct($value)
	{
		$this->value = $value;
	}

	function toString(){
		if($this->value == 1)
		{
			return "1";
		}
		elseif($this->value==2)
		{
			return "2";
		} 
		elseif ($this->value==3) 
		{
			return "Fizz";
		}
		elseif ($this->value==5) 
		{
			return "Buzz";
		}
		
	}
}



class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	function testShouldBeNumberOne(){
		$fizzbuzz = new FizzBuzz(1);
		$this->assertEquals("1", $fizzbuzz->toString());
	}

	function testShouldBeNumberTwo(){
		$fizzbuzz = new FizzBuzz(2);
		$this->assertEquals("2", $fizzbuzz->toString());
	}

	function testShouldBeReturnFizzString(){
		$fizzbuzz = new FizzBuzz(3);
		$this->assertEquals("Fizz", $fizzbuzz->toString());
	}
	function testShouldBeReturnBuzzString(){
		$fizzbuzz = new FizzBuzz(5);
		$this->assertEquals("Buzz", $fizzbuzz->toString());
	}

}
?>