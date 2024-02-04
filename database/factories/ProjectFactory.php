<?php

namespace Database\Factories;

use Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Project\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'client_id' => ClientFactory::new(),
            'name' => fake()->name(),
            'description' => fake()->words(3, true),
            'currency' => fake()->currencyCode(),
            'hourly_rate' => fake()->randomDigitNotZero(),
        ];
    }
}
