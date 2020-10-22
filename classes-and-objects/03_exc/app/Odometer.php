<?php

namespace App;

class Odometer
{
    private int $mileage;

    public function __construct(int $mileage = 0)
    {
        $this->mileage = $mileage;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function addMileage(int $km = 1): void
    {
        $this->mileage += $km;

        if ($this->mileage > 999999) {
            $this->mileage = $this->getMileage() - 1000000;
        }
    }

    public function drive(FuelGauge $fuelGauge)
    {
        if ($fuelGauge->getFuel() > 0) {
            $this->addMileage(10);
            $fuelGauge->burnFuel();
        }
    }
}