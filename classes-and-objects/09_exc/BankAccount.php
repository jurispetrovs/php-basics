<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getAccountData(): void
    {
        if ($this->balance >= 0) {
            echo $this->name . ', $' . number_format($this->balance, 2) . PHP_EOL;
        } else {
            echo $this->name . ', -$' . number_format($this->balance * -1, 2) . PHP_EOL;
        }
    }
}