<?php

declare(strict_types=1);

use Database\Factories\InvoiceFactory;
use Database\Factories\InvoiceItemFactory;
use Domain\Transaction\Actions\ExportInvoiceAsPdfAction;

it('can generate', function () {
    $invoice = InvoiceFactory::new()
        ->has(InvoiceItemFactory::new()->count(3))
        ->create();

    $url = app(ExportInvoiceAsPdfAction::class)->execute($invoice);

    expect($url)->toBeUrl();
});
