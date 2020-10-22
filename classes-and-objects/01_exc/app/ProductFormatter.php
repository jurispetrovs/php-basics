<?php

namespace App;

class ProductFormatter
{
    public static function priceFormatter(float $price): string
    {
        return number_format($price, 2) . ' EUR';
    }

    public static function amountFormatter(int $amount): string
    {
        return $amount . ' units';
    }
}