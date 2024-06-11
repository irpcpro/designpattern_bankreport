<?php

namespace Database\Factories;

use App\Enums\BankEnums;
use App\Enums\ReportTypeEnums;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // variables
        $price = rand(9,999) * 1000;
        $commission = rand(5,20);

        // bank enum
        $bankEnum = BankEnums::cases();
        $index_bankEnum = rand(0, count($bankEnum) - 1);

        // report type enum
        $reportTypeEnum = ReportTypeEnums::cases();
        $index_reportTypeEnum = rand(0, count($reportTypeEnum) - 1);

        // return data
        return [
            'total_amount' => $price,
            'commission_price' => ($commission * $price) / 100,
            'commission_percent' => $commission,
            'bank_enum' => $bankEnum[$index_bankEnum]->value,
            'type' => $reportTypeEnum[$index_reportTypeEnum]->value,
        ];
    }
}
