<?php

namespace App\Http\Controllers\BankReport\Banks\BankA;

use App\Enums\BankEnums;
use App\Http\Controllers\BankReport\Banks\Banks;

class BankA extends Banks {
    public function getEnum(): BankEnums {
        return BankEnums::BankA;
    }
}
