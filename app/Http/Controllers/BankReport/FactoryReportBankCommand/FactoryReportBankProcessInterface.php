<?php

namespace App\Http\Controllers\BankReport\FactoryReportBankCommand;

interface FactoryReportBankProcessInterface {
    public function process(): mixed;
    public function undo(): mixed;
}
