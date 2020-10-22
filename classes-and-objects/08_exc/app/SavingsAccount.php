<?php

namespace App;

class SavingsAccount
{
    private float $balance;
    private float $annualRate = 0;

    private float $totalDeposited = 0;
    private float $totalWithdrawn = 0;
    private float $totalInterestEarned = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function setAnnualRate(float $annualRate): void
    {
        $this->annualRate = $annualRate;
    }

    public function getMonthlyRate(): float
    {
        return ($this->annualRate / 12);
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
        $this->totalWithdrawn += $amount;
    }

    public function addDeposit(float $amount): void
    {
        $this->balance += $amount;
        $this->totalDeposited += $amount;
    }

    public function getInterest(): float
    {
        $interest = $this->balance * $this->getMonthlyRate();
        $this->totalInterestEarned += $interest;
        $this->balance += $interest;

        return $interest;
    }

    public function calculation(int $accountAge): void
    {
        $currentCalculation = 1;

        while ($accountAge >= $currentCalculation) {

            $this->addDeposit(GetInformation::getDepositAmount($currentCalculation));
            $this->withdraw(GetInformation::getWithdrawAmount($currentCalculation));
            $this->getInterest();

            $currentCalculation++;
        }

        GetInformation::getTotalInformation(
            $this->totalDeposited,
            $this->totalWithdrawn,
            $this->totalInterestEarned,
            $this->balance
        );
    }
}