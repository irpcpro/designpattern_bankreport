<?php

namespace App\Http\Controllers\BankReport\FactoryReportBankCommand;


use App\Http\Controllers\BankReport\Banks\BankA\BankA;
use App\Http\Controllers\BankReport\Banks\Banks;

class factoryReportBankCommand {

    /** @var Banks[] $banks */
    private array $banks = [
        BankA::class
    ];

    // execute the report bank system
    public function reportBank(){
        // check if banks are empty
        if(empty($this->banks))
            echo 'no command to do ..<br/>';

        /** @var Banks $bank_obj */
        foreach ($this->banks as $bank){
            $bank_obj = new $bank();
            $bank_invoker = $bank_obj->getInvoker();
            $bank_invoker->do();
        }

    }

}
