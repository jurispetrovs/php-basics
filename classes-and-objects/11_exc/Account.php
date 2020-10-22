<?php

class Account
{
    private int $id;
    private string $name;
    private float $balance;

    public function __construct(int $id, string $name, float $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function checkBalance(float $amount): bool
    {
        if ($this->balance - $amount >= 0) {
            return true;
        }
        return false;
    }

    public function withdrawal(float $amount): void
    {
        if ($this->checkBalance($amount)) {
            $this->balance -= $amount;
        }
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }
}