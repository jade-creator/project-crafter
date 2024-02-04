<?php

namespace Domain\Transaction\Enums;

enum PaymentType: string
{
    case ONLINE = 'online';
    case BANK_TRANSFER = 'bank transfer';
    case CASH = 'cash';
}
