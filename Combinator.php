<?php


class Combinator
{

    public static function  withRepetitions($totalNumbers, $limitSymbols)
    {
        $result = $totalNumbers ** $limitSymbols;
        return $result;
    }
}