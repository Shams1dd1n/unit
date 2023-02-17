<?php
use App\Models\Combination;
$number = new Combination();
$number ->giveAllCombinations(4,3);
echo $number;