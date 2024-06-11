<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Report;

use App\Enums\BankEnums;
use App\Http\Controllers\BankReport\FactoryReport\FactoryReportInterface;
use App\Http\Controllers\BankReport\ReportModel\ReportModelController;
use Illuminate\Support\Collection;

class BankAReport implements FactoryReportInterface {
    public function getReports(): Collection {
        // get reports for Bank A
        $reports = ReportModelController::getReports();
        $reports->where('bank_enum', BankEnums::BankA->value);
        // ..
        // ..
        return $reports->all();
    }
}
