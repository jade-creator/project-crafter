<?php

declare(strict_types=1);

use App\Filament\Resources\ProjectResource;
use Database\Factories\ProjectFactory;
use Filament\Facades\Filament;

beforeEach(fn () => loginAsUser());

it('can globally search', function () {
    $project = ProjectFactory::new()->create();

    $results = Filament::getGlobalSearchProvider()
        ->getResults($project->name);

    expect($results->getCategories()['projects']->first()->url)
        ->toEqual(ProjectResource::getUrl('edit', [$project]));
});
