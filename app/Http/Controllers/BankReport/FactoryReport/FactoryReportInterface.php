<?php

namespace App\Http\Controllers\BankReport\FactoryReport;



use Illuminate\Support\Collection;

interface FactoryReportInterface {
    public function getReports(): Collection;
}
