<?php

declare(strict_types=1);

use App\Filament\Resources\ClientResource\Pages\CreateClient;
use Database\Factories\ClientFactory;
use Domain\Client\Models\Client;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

beforeEach(fn () => loginAsUser());

it('can view form', function () {
    livewire(CreateClient::class)
        ->assertFormExists()
        ->assertOk();
});

it('can create', function () {
    $client = ClientFactory::new()->create();

    livewire(CreateClient::class)
        ->fillForm($client->toArray())
        ->call('create')
        ->assertOk();

    assertDatabaseHas(Client::class, ['id' => $client->id]);
});
