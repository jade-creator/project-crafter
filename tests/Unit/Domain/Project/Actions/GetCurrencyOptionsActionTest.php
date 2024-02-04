<?php

declare(strict_types=1);

use Akaunting\Money\Currency;
use Domain\Project\Actions\GetCurrencyOptionsAction;

use function PHPUnit\Framework\assertEquals;

it('can get', function () {
    $expected = app(GetCurrencyOptionsAction::class)->execute();

    /** @var array<int, string> */
    $currencies = array_keys(Currency::getCurrencies());

    /** @var array<string, string> */
    $currencyOptions = [];

    foreach ($currencies as $key => $value) {
        $currencyOptions[$value] = $value;
    }

    assertEquals($expected, $currencyOptions);
});
