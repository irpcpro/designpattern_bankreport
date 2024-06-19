<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Command\Processes;

use App\Http\Controllers\BankReport\FactoryReportBankCommand\FactoryReportBankProcessInterface;

class BankAProcessUndo implements FactoryReportBankProcessInterface {

    public function process(): mixed {
        echo 'Bank A Undo Processes.<br/>';
        return null;
    }

    public function undo(): mixed {
        echo 'nothing would happen in this part.<br/>';
        return null;
    }

}
