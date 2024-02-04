<?php

namespace Database\Factories;

use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Client\Models\Client> */
class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'email' => fake()->unique()->email(),
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'country' => fake()->country(),
            'street' => fake()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->word(),
            'zip' => (string) fake()->randomDigit(),
        ];
    }
}
