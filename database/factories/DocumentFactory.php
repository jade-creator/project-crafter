<?php

namespace Database\Factories;

use Domain\Document\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Document\Models\Document> */
class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'client_id' => ClientFactory::new(),
            'name' => fake()->name(),
            'description' => fake()->words(3, true),
            'date' => fake()->date(),
        ];
    }
}
