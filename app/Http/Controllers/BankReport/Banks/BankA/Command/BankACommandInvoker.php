<?php

namespace App\Http\Controllers\BankReport\Banks\BankA\Command;

use App\Http\Controllers\BankReport\FactoryReportBankCommand\factoryReportBankCommandInvoker;

class BankACommandInvoker extends factoryReportBankCommandInvoker {

    public function do(){
        foreach ($this->commands as $command){
            $command->process();
            $this->history[] = $command;
        }
    }

    public function undo(){
        $command = array_pop($this->history);
        if(isset($command))
            $command->undo();
    }

}
