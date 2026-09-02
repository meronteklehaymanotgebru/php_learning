<?php

class BankAccount
{
    private float $balance;

    public function __construct(float $balance)
    {
        // Set the balance
    }

    public function getBalance(): float
    {
        // Return the balance
    }

    public function deposit(float $amount): void
    {
        // Add the amount to the balance
    }
}

$account = new BankAccount(1000);

echo "Initial balance: " . $account->getBalance() . "\n";

$account->deposit(500);

echo "After deposit: " . $account->getBalance() . "\n";