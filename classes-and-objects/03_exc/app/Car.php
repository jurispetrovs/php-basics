<?php

namespace App;

class Car
{
    private string $plateNumber;
    private int $tank;

    private FuelGauge $fuelGauge;
    private Odometer $odometer;

    public function __construct(
        string $plateNumber,
        int $tank,
        FuelGauge $fuelGauge,
        Odometer $odometer
    )
    {
        $this->plateNumber = $plateNumber;
        $this->tank = $tank;

        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
    }

    public function getPlateNumber(): string
    {
        return $this->plateNumber;
    }

    public function getTank(): int
    {
        return $this->tank;
    }

    public function getFuelGauge(): FuelGauge
    {
        return $this->fuelGauge;
    }

    public function getOdometer(): Odometer
    {
        return $this->odometer;
    }
}