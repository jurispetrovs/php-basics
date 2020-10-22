<?php

require_once 'vendor/autoload.php';

use App\SavingsAccount;
use App\GetInformation;

$balance = GetInformation::getBalanceAtStart();
$savingAccount = new SavingsAccount($balance);

$annualRate = GetInformation::getAnnualRate();
$savingAccount->setAnnualRate($annualRate);

$accountAge = GetInformation::getAccountAge();
$savingAccount->calculation($accountAge);