<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FactoryReportCommandClientQueueLogs extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'bank_enum',
        'status_enum',
    ];

}
