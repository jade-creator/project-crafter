<?php

declare(strict_types=1);

use App\Filament\Resources\ClientResource\Pages\EditClient;
use Database\Factories\ClientFactory;
use Domain\Client\Models\Client;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

beforeEach(fn () => loginAsUser());

it('can view form', function () {
    $client = ClientFactory::new()->create();

    livewire(EditClient::class, ['record' => $client->getRouteKey()])
        ->assertFormExists()
        ->assertOk();
});

it('can edit', function () {
    $client = ClientFactory::new()->create();

    $email = fake()->unique()->email();
    $name = fake()->name();
    $phone = fake()->phoneNumber();
    $country = fake()->country();
    $street = fake()->streetAddress();
    $city = fake()->city();
    $state = fake()->word();
    $zip = (string) fake()->randomDigit();

    livewire(EditClient::class, ['record' => $client->getRouteKey()])
        ->fillForm([
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
            'country' => $country,
            'street' => $street,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
        ])
        ->assertFormExists()
        ->call('save')
        ->assertOk();

    assertDatabaseHas(
        Client::class,
        [
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
            'country' => $country,
            'street' => $street,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
        ]
    );
});
