<?php


class FizzBuzz
{
	
	function __construct($value)
	{
		$this->value = $value;
	}

	function toString(){
		if($this->value == 1)
			return "1";
		return "2";
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

}
?>