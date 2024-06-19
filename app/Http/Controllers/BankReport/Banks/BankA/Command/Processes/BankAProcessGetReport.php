<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Command\Processes;

use App\Http\Controllers\BankReport\Banks\BankA\Report\BankAReport;
use App\Http\Controllers\BankReport\FactoryReportBankCommand\FactoryReportBankProcessInterface;
use Illuminate\Support\Collection;

class BankAProcessGetReport implements FactoryReportBankProcessInterface {

    public function process(): Collection {
        echo 'returning reports data.<br/>';
        return (new BankAReport())->getReports();
    }

    public function undo(): mixed {
        echo 'undo returning reports data.<br/>';
        return null;
    }

}
