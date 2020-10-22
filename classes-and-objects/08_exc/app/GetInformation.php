<?php

namespace App;

class GetInformation
{
    public static function getBalanceAtStart(): float
    {
        return (float)readline('How much money is in the account? ');
    }

    public static function getAnnualRate(): float
    {
        return (float)readline('Enter the annual interest rate: ');
    }

    public static function getAccountAge(): int
    {
        return (int)readline('How long has the account been opened? ');
    }

    public static function getDepositAmount(int $month): float
    {
        return (float)readline('Enter amount deposited for month ' . $month . ': ');
    }

    public static function getWithdrawAmount(int $month): float
    {
        return (float)readline('Enter amount withdrawn for month  ' . $month . ': ');
    }

    public static function getTotalInformation(
        float $totalDeposited,
        float $totalWithdrawn,
        float $totalInterestEarned,
        float $balance
    ): void
    {
        echo 'Total deposited: ' . NumberFormatter::moneyFormatter($totalDeposited) . PHP_EOL;
        echo 'Total withdrawn: ' . NumberFormatter::moneyFormatter($totalWithdrawn) . PHP_EOL;
        echo 'Interest earned: ' . NumberFormatter::moneyFormatter($totalInterestEarned) . PHP_EOL;
        echo 'Ending balance: ' . NumberFormatter::moneyFormatter($balance) . PHP_EOL;
    }
}