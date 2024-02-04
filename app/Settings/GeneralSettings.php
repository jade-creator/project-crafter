<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $name;

    public string $address;

    public ?string $code;

    public ?string $vat;

    public string $phone;

    public static function group(): string
    {
        return 'general';
    }
}
