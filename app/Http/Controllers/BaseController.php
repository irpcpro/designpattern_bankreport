<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BankReport\Banks\BankA\Report\BankAReport;

class BaseController extends Controller {
    public function index(){

        dd((new BankAReport())->getReports());

    }
}
