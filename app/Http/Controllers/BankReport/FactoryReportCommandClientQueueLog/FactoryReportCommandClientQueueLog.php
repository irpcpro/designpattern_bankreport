<?php

namespace App\Http\Controllers\BankReport\FactoryReportCommandClientQueueLog;

use App\Enums\FactoryReportCommandClientQueueLogEnum;
use App\Http\Controllers\BankReport\Banks\Banks;
use App\Models\FactoryReportCommandClientQueueLogs;
use Illuminate\Database\Eloquent\Model;

class FactoryReportCommandClientQueueLog {

    public function saveLog()
    {

    }

    public function getProcessLog(Banks $bank): Model | null {
        $processLog = FactoryReportCommandClientQueueLogs::query();
        $processLog->where('bank_enum', $bank->getEnum()->value);
        if($processLog->exists())
            return $processLog->first();
        else
            return null;
    }

    public function updateProcessLog(Banks $bank, FactoryReportCommandClientQueueLogEnum $status, Model $processLog): Model {
        $processLog->update([
            'status_enum' => $status->value
        ]);
        return $processLog->refresh();
    }

    public function createProcessLog(Banks $bank, FactoryReportCommandClientQueueLogEnum $status): Model {
        $query = FactoryReportCommandClientQueueLogs::query();
        return $query->create([
            'bank_enum' => $bank->getEnum()->value,
            'status_enum' => $status->value
        ]);
    }

}
