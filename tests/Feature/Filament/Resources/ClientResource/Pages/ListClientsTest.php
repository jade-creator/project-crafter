<?php

declare(strict_types=1);

use App\Filament\Resources\ClientResource\Pages\ListClients;
use Database\Factories\ClientFactory;

use function Pest\Livewire\livewire;

beforeEach(fn () => loginAsUser());

it('can view list page', function () {
    livewire(ListClients::class)->assertOk();

    $clients = ClientFactory::new()->count(2)->create();

    livewire(ListClients::class)
        ->assertCanSeeTableRecords($clients)
        ->assertOk();
});
