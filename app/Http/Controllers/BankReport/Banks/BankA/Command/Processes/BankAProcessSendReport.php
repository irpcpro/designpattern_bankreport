<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Command\Processes;

use App\Http\Controllers\BankReport\FactoryReportBankCommand\FactoryReportBankProcessInterface;

class BankAProcessSendReport implements FactoryReportBankProcessInterface {

    public function process(): mixed {
        echo 'sending ...<br/>'; // TODO - fix
        return null;
    }

    public function undo(): mixed {
        echo 'sending undo ..<br/>';
        return null;
    }

}
