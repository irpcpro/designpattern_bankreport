<?php

namespace App\Http\Controllers\BankReport\Banks;

use App\Enums\BankEnums;

abstract class Banks {
    abstract public function getEnum(): BankEnums;
}
