<?php

namespace App\Http\Controllers\BankReport\FactoryReportBankTransformer;

use App\Http\Controllers\BankReport\FactoryReportBankConnector\FactoryReportBankConnectorInterface;

abstract class FactoryReportBankTransformer {
    abstract public function GetConnector(): FactoryReportBankConnectorInterface;

    public function Transform(){

    }

}
