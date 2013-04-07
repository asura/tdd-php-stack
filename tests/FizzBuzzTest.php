<?php

function fizzbuzz($value)
{
    if ($value % 15 == 0) {
        return "FizzBuzz";
    }
    if ($value % 5 == 0) {
        return "Buzz";
    }
    if ($value % 3 == 0) {
        return "Fizz";
    }
    return $value;
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    public function testFizz()
    {
        $this->assertEquals("Fizz", fizzbuzz(3));
    }
    public function testBuzz()
    {
        $this->assertEquals("Buzz", fizzbuzz(5));
    }
    public function testFizzBuzz()
    {
        $this->assertEquals("FizzBuzz", fizzbuzz(15));
    }
    public function testValue()
    {
        $this->assertEquals("1", fizzbuzz(1));
    }
}
