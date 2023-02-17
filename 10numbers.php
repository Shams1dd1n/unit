<?php
use App\Models\Combination;
$number = new Combination();
$number ->giveAllCombinations(10,8);
echo $number;