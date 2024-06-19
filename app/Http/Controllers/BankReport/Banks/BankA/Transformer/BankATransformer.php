<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Transformer;

use App\Http\Controllers\BankReport\Banks\BankA\Connector\BankAConnector;
use App\Http\Controllers\BankReport\FactoryReportBankConnector\FactoryReportBankConnectorInterface;
use App\Http\Controllers\BankReport\FactoryReportBankTransformer\FactoryReportBankTransformer;

class BankATransformer extends FactoryReportBankTransformer {

    public function GetConnector(): FactoryReportBankConnectorInterface {
        return new BankAConnector();
    }

}
