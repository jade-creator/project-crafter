<?php

namespace Domain\Project\Actions;

use Akaunting\Money\Currency;

readonly class GetCurrencyOptionsAction
{
    public function execute(): array
    {
        /** @var array<int, string> */
        $currencies = array_keys(Currency::getCurrencies());

        /** @var array<string, string> */
        $currencyOptions = [];

        foreach ($currencies as $key => $value) {
            $currencyOptions[$value] = $value;
        }

        return $currencyOptions;
    }
}
