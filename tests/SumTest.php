<?php
require_once 'Sum.php';

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testSumof()
    {
        $counts = new Sum();
        $this->assertEquals(5, $counts->sumof(10,2));
    }

}