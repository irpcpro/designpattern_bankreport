<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Connector;

use App\Http\Controllers\BankReport\FactoryReportBankConnector\FactoryReportBankConnectorInterface;

class BankAConnector implements FactoryReportBankConnectorInterface {

    public function connect(): bool{
        echo 'connecting to the Bank A Server.<br/>';
        return true;
    }

    public function doSend(): bool{
        echo 'sending data ...<br/>';
        return true;
    }

    public function disconnect(): bool{
        echo 'disconnecting to the Bank A Server.<br/>';
        return true;
    }

}
