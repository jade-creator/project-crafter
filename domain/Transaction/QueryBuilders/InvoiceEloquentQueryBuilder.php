<?php

declare(strict_types=1);

namespace Domain\Transaction\QueryBuilders;

use Domain\Transaction\Enums\InvoiceStatus;
use Illuminate\Database\Eloquent\Builder;

/** @extends \Illuminate\Database\Eloquent\Builder<\Domain\Transaction\Models\Invoice> */
class InvoiceEloquentQueryBuilder extends Builder
{
    public function whereDrafted(): self
    {
        return $this->whereStatus(InvoiceStatus::DRAFT->value);
    }

    public function whereSent(): self
    {
        return $this->whereStatus(InvoiceStatus::SENT->value);
    }

    public function wherePending(): self
    {
        return $this->whereStatus(InvoiceStatus::PENDING->value);
    }

    public function wherePaid(): self
    {
        return $this->whereStatus(InvoiceStatus::PAID->value);
    }

    public function wherePartiallyPaid(): self
    {
        return $this->whereStatus(InvoiceStatus::PARTIAL_PAYMENT->value);
    }

    public function whereCancelled(): self
    {
        return $this->whereStatus(InvoiceStatus::CANCELLED->value);
    }

    public function whereRefunded(): self
    {
        return $this->whereStatus(InvoiceStatus::REFUNDED->value);
    }
}
