<?php

namespace Database\Factories;

use Domain\Transaction\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Transaction\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    protected $model = InvoiceItem::class;

    public function definition(): array
    {
        return [
            'invoice_id' => InvoiceFactory::new(),
            'title' => fake()->title(),
            'price_per_unit' => fake()->randomDigitNotZero(),
            'quantity' => fake()->randomDigitNotZero(),
        ];
    }
}
