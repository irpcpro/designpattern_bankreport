<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Report;

use App\Http\Controllers\BankReport\Banks\BankA\BankA;
use App\Http\Controllers\BankReport\FactoryReport\FactoryReportInterface;
use App\Http\Controllers\BankReport\ReportModel\ReportModelController;
use Illuminate\Support\Collection;

class BankAReport extends BankA implements FactoryReportInterface {
    public function getReports(): Collection {
        // get reports for Bank A
        $reports = ReportModelController::getReports();
        $reports->where('bank_enum', $this->getEnum()->value);
        // ..
        // ..
        return $reports->all();
    }
}
