<?php

namespace Domain\Transaction\Enums;

enum InvoiceStatus: string
{
    case DRAFT = 'draft';
    case SENT = 'sent';
    case PENDING = 'pending';
    case PAID = 'paid';
    case PARTIAL_PAYMENT = 'partial payment';
    case CANCELLED = 'cancelled';
    case REFUNDED = 'refunded';
}
