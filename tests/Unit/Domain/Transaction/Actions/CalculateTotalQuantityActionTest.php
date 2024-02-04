<?php

declare(strict_types=1);

use Database\Factories\InvoiceFactory;
use Database\Factories\InvoiceItemFactory;
use Domain\Transaction\Actions\CalculateTotalQuantityAction;
use Domain\Transaction\Models\InvoiceItem;

it('can calculate', function () {
    $invoice = InvoiceFactory::new()
        ->has(InvoiceItemFactory::new()->count(3))
        ->create();

    $total = (int) app(CalculateTotalQuantityAction::class)
        ->execute($invoice->invoiceItems->toArray());

    $toBeTotal = (int) $invoice
        ->invoiceItems
        ->map(fn (InvoiceItem $item) => $item->quantity)
        ->sum();

    expect($total)->toBe($toBeTotal);
});
