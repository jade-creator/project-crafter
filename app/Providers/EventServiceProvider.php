<?php

namespace App\Providers;

use Domain\Transaction\Models\Invoice;
use Domain\Transaction\Observers\InvoiceObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /** @var array<class-string<\Illuminate\Database\Eloquent\Model>, array<int, class-string>> */
    protected $observers = [
        Invoice::class => [InvoiceObserver::class],
    ];

    /** @var array<class-string, array<int, class-string>> */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    #[\Override]
    public function boot(): void
    {
    }

    #[\Override]
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
