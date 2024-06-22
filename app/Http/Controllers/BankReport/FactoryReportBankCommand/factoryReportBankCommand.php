<?php

namespace App\Http\Controllers\BankReport\FactoryReportBankCommand;


use App\Enums\FactoryReportCommandClientQueueLogEnum;
use App\Http\Controllers\BankReport\Banks\BankA\BankA;
use App\Http\Controllers\BankReport\Banks\Banks;
use App\Http\Controllers\BankReport\FactoryReportCommandClientQueueLog\FactoryReportCommandClientQueueLog;

class factoryReportBankCommand {

    /** @var Banks[] $banks */
    private array $banks = [
        BankA::class
    ];

    // execute the report bank system
    public function reportBanks(){
        // check if banks are empty
        if(empty($this->banks))
            echo 'no command to do ..<br/>';

        // execute each bank invokers
        foreach ($this->banks as $bank)
            $this->ReportBankProcess(new $bank());

    }

    // process each bank command invoker
    private function ReportBankProcess(Banks $bank){
        // get object from report queue log
        $processLog = new FactoryReportCommandClientQueueLog();

        // get the process log for the bank
        $getProcessLog = $processLog->getProcessLog($bank);
        if($getProcessLog != null){
            $processLog->updateProcessLog($bank, FactoryReportCommandClientQueueLogEnum::Cancelled, $getProcessLog);
            $bank->getInvokerUndo()->do();
        }

        // insert new log
        $getProcessLog = $processLog->createProcessLog($bank, FactoryReportCommandClientQueueLogEnum::Processing);

        // do the action
        $bank_invoker = $bank->getInvoker()->do();

        // update process log
        $processLog->updateProcessLog($bank, FactoryReportCommandClientQueueLogEnum::Done, $getProcessLog);
    }

}
