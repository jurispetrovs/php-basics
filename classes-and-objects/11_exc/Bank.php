<?php

class Bank
{
    private string $name;

    private array $accounts;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addAccount(Account $account): void
    {
        $this->accounts[] = $account;
    }

    public function getAccountById(int $id): ?Account
    {
        /** @var Account $account */
        foreach ($this->accounts as $account) {
            if ($account->getId() === $id) {
                return $account;
            }
        }
        return null;
    }

    public function transfer(Account $from, Account $to, float $amount): void
    {
        if ($from->checkBalance($amount) && $from != null && $to != null) {
            $from->withdrawal($amount);
            $to->deposit($amount);
        }
    }

    public function drawAllAccounts(): void
    {
        /** @var Account $account */
        foreach ($this->accounts as $account) {
            echo $account->getName() . ' ' . $account->getBalance() . PHP_EOL;
        }
    }
}