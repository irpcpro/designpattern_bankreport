<?php

namespace App\Http\Controllers\BankReport\Banks;

use App\Enums\BankEnums;
use App\Http\Controllers\BankReport\FactoryReportBankCommand\factoryReportBankCommandInvoker;

abstract class Banks {
    abstract public function getEnum(): BankEnums;
    abstract public function getInvoker():factoryReportBankCommandInvoker;
    public function getInvokerUndo(): factoryReportBankCommandInvoker | null {
        return null;
    }
}
