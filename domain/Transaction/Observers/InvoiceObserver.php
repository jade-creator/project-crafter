<?php

namespace Domain\Transaction\Observers;

use Domain\Transaction\Actions\GenerateInvoiceNumberAction;
use Domain\Transaction\Models\Invoice;

class InvoiceObserver
{
    public function creating(Invoice $invoice): void
    {
        $invoice->reference = app(GenerateInvoiceNumberAction::class)
            ->execute();
    }
}
