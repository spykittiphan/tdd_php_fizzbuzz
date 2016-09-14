<?php


class FizzBuzz
{
	
	function __construct($value)
	{
		$this->value = $value;
	}

	function toString(){
		return "1";
	}
}



class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	
	function testShouldBeNumberOne(){

		$fizzbuzz = new FizzBuzz(1);
		$this->assertEquals("1", $fizzbuzz->toString());
	}

}
?>