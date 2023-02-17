<?php
require_once 'div.php';

use PHPUnit\Framework\TestCase;

class DivTest extends TestCase
{
    public function testDivof()
    {
        $counts = new div();
        $this->assertEquals(5, $counts->divof(10,2));
    }

}