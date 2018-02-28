<?php


use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    private $buzzer = null;

    public function setUp()
    {
        $this->buzzer = new FizzBuzz();
        parent::setUp();
    }

    public function testThis()
    {
        $this->assertEquals('Fizz, 2, Buzz, Fizz, FizzBuzz', $this->buzzer->convert([3, 2, 5, 42, 15]));
    }


}