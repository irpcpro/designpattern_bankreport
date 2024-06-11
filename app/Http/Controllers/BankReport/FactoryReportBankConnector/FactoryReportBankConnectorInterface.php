<?php

namespace App\Http\Controllers\BankReport\FactoryReportBankConnector;

interface FactoryReportBankConnectorInterface {
    public function connect(): bool;
    public function doSend(): bool;
    public function disconnect(): bool;
}
