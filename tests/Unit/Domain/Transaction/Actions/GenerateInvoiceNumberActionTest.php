<?php

declare(strict_types=1);

use Database\Factories\InvoiceFactory;
use Domain\Transaction\Actions\GenerateInvoiceNumberAction;
use Domain\Transaction\Models\Invoice;
use Illuminate\Support\Str;

it('can generate', function () {
    InvoiceFactory::new()->create();

    $invoiceNumber = app(GenerateInvoiceNumberAction::class)->execute();

    expect($invoiceNumber)->toBe(
        (int) (now()->format('Y').Str::of((string) Invoice::count() + 1)->padLeft(4, '0'))
    );
});
