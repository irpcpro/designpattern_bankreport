<?php

namespace App\Http\Controllers\BankReport\Banks\BankA;

use App\Enums\BankEnums;
use App\Http\Controllers\BankReport\Banks\BankA\Command\BankACommandInvoker;
use App\Http\Controllers\BankReport\Banks\BankA\Command\Processes\BankAProcessGetReport;
use App\Http\Controllers\BankReport\Banks\BankA\Command\Processes\BankAProcessSendDone;
use App\Http\Controllers\BankReport\Banks\BankA\Command\Processes\BankAProcessSendReport;
use App\Http\Controllers\BankReport\Banks\BankA\Command\Processes\BankAProcessUndo;
use App\Http\Controllers\BankReport\Banks\Banks;
use App\Http\Controllers\BankReport\FactoryReportBankCommand\factoryReportBankCommandInvoker;

class BankA extends Banks {
    public function getEnum(): BankEnums {
        return BankEnums::BankA;
    }

    public function getInvoker(): factoryReportBankCommandInvoker {
        // make an object from command invoker
        $BankACmdInvoker = new BankACommandInvoker();
        // add process to command invoker
        $BankACmdInvoker->addCommand( new BankAProcessGetReport() );
        $BankACmdInvoker->addCommand( new BankAProcessSendReport() );
        $BankACmdInvoker->addCommand( new BankAProcessSendDone() );
        // return the invoker to use in factory report bank command
        return $BankACmdInvoker;
    }

    public function getInvokerUndo(): factoryReportBankCommandInvoker | null {
        // make an object from command invoker
        $BankACmdInvoker = new BankACommandInvoker();
        // add process to command invoker
        $BankACmdInvoker->addCommand( new BankAProcessUndo() );
        // return the invoker to use in factory report bank command
        return $BankACmdInvoker;
    }

}
