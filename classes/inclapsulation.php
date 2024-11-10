<?php

declare(strict_types=1);

class BankAccount {
    private float $balance = 0;

    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): bool {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }

        return false;
    }
}

$account = new BankAccount();
$account->deposit(150);
var_dump(
    $account->withdraw(39),
    $account->getBalance()
);