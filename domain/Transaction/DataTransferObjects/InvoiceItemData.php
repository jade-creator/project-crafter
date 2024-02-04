<?php

namespace Domain\Transaction\DataTransferObjects;

final readonly class InvoiceItemData
{
    public function __construct(
        public string $title,
        public float $price_per_unit,
        public int $quantity,
    ) {
    }
}
