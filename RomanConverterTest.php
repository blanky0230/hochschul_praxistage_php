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

    public function test2k18()
    {
        $this->assertEquals("MMXVIII", $this->converter->convert(2018));
    }


}

