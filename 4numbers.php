<?php
function giveAllCombinations($a, $b)
{
    $z = $a ** $b;
    return $z;
}
echo giveAllCombinations(4, 3);
