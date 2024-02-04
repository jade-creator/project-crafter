<?php

declare(strict_types=1);

use App\Filament\Resources\DocumentResource;
use Database\Factories\DocumentFactory;
use Filament\Facades\Filament;

beforeEach(fn () => loginAsUser());

it('can globally search', function () {
    $document = DocumentFactory::new()->create();

    $results = Filament::getGlobalSearchProvider()
        ->getResults($document->name);

    expect($results->getCategories()['documents']->first()->url)
        ->toEqual(DocumentResource::getUrl('edit', [$document]));
});
