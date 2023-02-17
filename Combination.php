<?php

namespace App\Models;

class Combination
{
    public function giveAllCombinations($a, $b)
    {
        $z = $a ** $b;
        return $z;
    }

}