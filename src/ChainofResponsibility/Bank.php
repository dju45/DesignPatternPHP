<?php

namespace App\ChainofResponsibility;

use App\ChainofResponsibility\Account;

class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
