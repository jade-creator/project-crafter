<?php

declare(strict_types=1);

use App\Filament\Resources\ClientResource;
use Database\Factories\ClientFactory;
use Filament\Facades\Filament;

beforeEach(fn () => loginAsUser());

it('can globally search', function () {
    $client = ClientFactory::new()->create();

    $results = Filament::getGlobalSearchProvider()
        ->getResults($client->name);

    expect($results->getCategories()['clients']->first()->url)
        ->toEqual(ClientResource::getUrl('edit', [$client]));
});
