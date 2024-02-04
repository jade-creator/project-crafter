<?php

namespace Database\Factories;

use Domain\Transaction\Enums\InvoiceStatus;
use Domain\Transaction\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Transaction\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition(): array
    {
        return [
            'client_id' => ClientFactory::new(),
            'status' => InvoiceStatus::DRAFT->value,
            'date' => fake()->date(),
            'vat_rate' => fake()->randomDigitNotZero(),
            'discount_by_percent' => fake()->randomDigitNotZero(),
            'shipping_costs' => fake()->randomDigitNotZero(),
            'total_price' => fake()->randomDigitNotZero(),
        ];
    }
}
