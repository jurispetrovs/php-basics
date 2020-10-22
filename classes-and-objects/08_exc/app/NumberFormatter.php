<?php

namespace App;

class NumberFormatter
{
    public static function moneyFormatter(float $money): string
    {
        return '$' . number_format($money, 2, '.', ',');
    }
}