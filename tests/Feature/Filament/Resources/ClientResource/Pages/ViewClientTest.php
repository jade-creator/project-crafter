<?php

declare(strict_types=1);

use App\Filament\Resources\ClientResource\Pages\ViewClient;
use Database\Factories\ClientFactory;

use function Pest\Livewire\livewire;

beforeEach(fn () => loginAsUser());

it('can view record', function () {
    $client = ClientFactory::new()->create();

    livewire(ViewClient::class, ['record' => $client->getRouteKey()])
        ->assertOk()
        ->assertSee([
            $client->email,
            $client->name,
            $client->phone,
            $client->country,
            $client->street,
            $client->city,
            $client->state,
            $client->zip,
        ]);
});
