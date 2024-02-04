<?php

namespace Domain\Transaction\Actions;

use Domain\Transaction\Models\Invoice;
use Illuminate\Support\Str;

readonly class GenerateInvoiceNumberAction
{
    public function execute(): int
    {
        $dateTime = now();
        $prefix = $dateTime->format('Y');

        /** @var \Domain\Transaction\Models\Invoice|null */
        $latestModel = Invoice::withTrashed()
            ->where(
                'reference',
                'like',
                $prefix.'%'
            )
            ->latest()
            ->first();

        if (is_null($latestModel)) {
            $invoiceNumber = $prefix.'0001';
        } else {
            $latestSequence = (string) Str::of((string) $latestModel->reference)
                ->substr(Str::length($prefix));

            $nextSequence = ((int) $latestSequence) + 1;

            $invoiceNumber = $prefix.Str::of((string) $nextSequence)->padLeft(4, '0');
        }

        return (int) $invoiceNumber;
    }
}
