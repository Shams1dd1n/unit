<?php
require_once 'Combinator.php';
use PHPUnit\Framework\TestCase;
class CombinatoricsTest extends TestCase
{
    public function testPlacements()
    {
        $this->assertEquals(64, Combinator::withRepetitions(4, 3));
        $this->assertEquals(100000000, Combinator::withRepetitions(10, 8));
    }

}
