<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.name', 'Jade Soriano');
        $this->migrator->add('general.address', 'Pasig City');
        $this->migrator->add('general.code', 'QE1J2231');
        $this->migrator->add('general.vat', '12379812');
        $this->migrator->add('general.phone', '022821312');
    }
};
