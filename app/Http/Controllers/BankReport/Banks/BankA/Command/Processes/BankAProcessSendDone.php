<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Command\Processes;

use App\Http\Controllers\BankReport\FactoryReportBankCommand\FactoryReportBankProcessInterface;

class BankAProcessSendDone implements FactoryReportBankProcessInterface {

    public function process(): mixed {
        echo 'send done.<br/>';
        return null;
    }

    public function undo(): mixed {
        echo 'send done undo.<br/>';
        return null;
    }

}
