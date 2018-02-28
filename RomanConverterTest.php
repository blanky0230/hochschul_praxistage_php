<?php


use PHPUnit\Framework\TestCase;
include 'RomanConverter.php';

class RomanConverterTest extends TestCase
{
    private $converter = null;

    public function setUp()
    {
        $this->converter = new RomanConverter();

    }

    public function testNone()
    {
        $this->assertEquals('', $this->converter->convert(null));
    }

    public function testOne()
    {
        $this->assertEquals('I', $this->converter->convert(1));
    }

    public function testFive()
    {
        $this->assertEquals('V', $this->converter->convert(5));
    }

    public function testTwo()
    {
        $this->assertEquals('II', $this->converter->convert(2));
    }

    public function test2k18()
    {
        $this->assertEquals("MMXVIII", $this->converter->convert(2018));
    }


}

