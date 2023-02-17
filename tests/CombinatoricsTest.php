<?php

use PHPUnit\Framework\TestCase;

class CombinatoricsTest extends TestCase
{
    public function testPlacements()
    {
        $this->assertEquals(64, Сombinator::withRepetitions(4, 3));
        $this->assertEquals(100000000, Сombinator::withRepetitions(10, 8));
    }

}
