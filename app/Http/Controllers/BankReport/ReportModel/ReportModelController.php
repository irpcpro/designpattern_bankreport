<?php

namespace App\Http\Controllers\BankReport\ReportModel;

use App\Http\Controllers\Controller;
use App\Models\Report;

class ReportModelController extends Controller {
    public static function getReports(): Report {
        // filter on data for reporting
        $report = (new Report);
        // ...
        // ...
        return $report;
    }
}
