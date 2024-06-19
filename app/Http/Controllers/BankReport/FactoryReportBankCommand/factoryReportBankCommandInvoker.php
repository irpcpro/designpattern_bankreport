<?php

namespace App\Http\Controllers\BankReport\FactoryReportBankCommand;

abstract class factoryReportBankCommandInvoker {
    /** @var FactoryReportBankProcessInterface[] $commands  */
    protected array $commands = [];

    /** @var FactoryReportBankProcessInterface[] $history  */
    protected array $history = [];

    /* add data to collect the commands */
    public function addCommand(FactoryReportBankProcessInterface $command){
        $this->commands[] = $command;
    }

    /* execute the process function of the command */
    abstract public function do();

    /* execute the undo function of the command */
    abstract public function undo();

}
