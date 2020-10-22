<?php

class CitrusFlavored extends EnergyDrink
{
    private float $preferCitrus;

    public function __construct(int $surveyed, float $purchased, float $preferCitrus)
    {
        parent::__construct($surveyed, $purchased);

        $this->surveyed = $surveyed;
        $this->purchased = $purchased;
        $this->preferCitrus = $preferCitrus;
    }

    public function getDrinkersPreferCitrus(): int
    {
        return $this->getDrinkers() * $this->preferCitrus;
    }
}