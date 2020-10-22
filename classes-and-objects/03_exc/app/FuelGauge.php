<?php

namespace App;

class FuelGauge
{
    private float $fuel;

    public function __construct(float $fuel = 70)
    {
        $this->fuel = $fuel;
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }

    public function refuelingFuel(Car $car): void
    {
        if ($this->fuel + 1 <= $car->getTank()) {
            $this->fuel++;
        }
    }

    public function burnFuel(): void
    {
        if ($this->fuel > 0) {
            $this->fuel--;
        }
    }
}