<?php

abstract class EnergyDrink
{
    protected int $surveyed;
    protected float $purchased;

    public function __construct(int $surveyed, float $purchased)
    {
        $this->surveyed = $surveyed;
        $this->purchased = $purchased;
    }

    public function getSurveyed(): int
    {
        return $this->surveyed;
    }

    public function getDrinkers(): int
    {
        return $this->surveyed * $this->purchased;
    }
}