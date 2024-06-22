<?php

namespace App\Http\Controllers\BankReport;

use App\Http\Controllers\BankReport\FactoryReportBankCommand\factoryReportBankCommand;
use App\Http\Controllers\Controller;

class BankReportClientController extends Controller {

    public function index(){

        $factoryReportBankCmd = new factoryReportBankCommand();
        $factoryReportBankCmd->reportBanks();

    }

}
