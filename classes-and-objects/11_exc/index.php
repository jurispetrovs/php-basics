<?php

require_once 'Account.php';
require_once 'Bank.php';

$bank = new Bank('Revolut');

$bank->addAccount(new Account(1, 'Barto', 100));
$bank->addAccount(new Account(2, 'Ethan', 0));
$bank->addAccount(new Account(3, 'Calvin', 0));

$bank->transfer($bank->getAccountById(1), $bank->getAccountById(2), 50);
$bank->transfer($bank->getAccountById(2), $bank->getAccountById(3), 25);

$bank->drawAllAccounts();