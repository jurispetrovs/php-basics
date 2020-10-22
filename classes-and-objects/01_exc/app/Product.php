<?php

namespace App;

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(int $id, string $name, float $price, int $amount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function printProduct(): void
    {
        echo $this->name . ', ' . ProductFormatter::priceFormatter($this->price) . ', '
            . ProductFormatter::amountFormatter($this->amount) . PHP_EOL;
    }
}