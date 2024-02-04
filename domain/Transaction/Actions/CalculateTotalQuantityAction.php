<?php

namespace Domain\Transaction\Actions;

use Domain\Transaction\DataTransferObjects\InvoiceItemData;

readonly class CalculateTotalQuantityAction
{
    public function execute(array $invoiceItems): float
    {
        $invoiceItems = collect($invoiceItems)
            ->reject(
                fn (array $data): bool => is_null($data['title']) ||
                    is_null($data['price_per_unit']) ||
                    is_null($data['quantity'])
            )
            ->map(
                fn (array $data): InvoiceItemData => new InvoiceItemData(
                    title: $data['title'],
                    price_per_unit: $data['price_per_unit'],
                    quantity: $data['quantity']
                )
            )
            ->toArray();

        $total = 0;

        if (empty($invoiceItems)) {
            return $total;
        }

        foreach ($invoiceItems as $item) {
            $total += $item->quantity;
        }

        return $total;
    }
}
