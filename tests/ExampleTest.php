<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSum()
    {
        $result = 2 + 3;
        $this->assertEquals(5, $result);
    }
}
