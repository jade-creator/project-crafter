<?php

declare(strict_types=1);

use Database\Factories\InvoiceFactory;
use Database\Factories\InvoiceItemFactory;
use Domain\Transaction\Actions\CalculateTotalPriceAction;

it('can calculate', function () {
    $invoice = InvoiceFactory::new()
        ->has(InvoiceItemFactory::new()->count(3))
        ->create();

    $total = (float) app(CalculateTotalPriceAction::class)
        ->execute($invoice->invoiceItems->toArray());

    $toBeTotal = money(0);

    foreach ($invoice->invoiceItems as $item) {
        $toBeTotal = $toBeTotal->add(
            money($item->price_per_unit)->multiply($item->quantity)
        );
    }

    expect($total)->toBe($toBeTotal->getAmount());
});
