<?php

namespace App\Enums;

enum FactoryReportCommandClientQueueLogEnum: string {
    case Processing = 'processing';
    case Done = 'done';
    case Cancelled = 'cancelled';
}
