<?php

namespace App\Filament\Widgets;

use Akaunting\Money\Currency;
use Domain\Project\Models\TaskLog;
use Domain\Transaction\Models\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 2;

    protected static ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Hours', TaskLog::sum('hours')),
            Stat::make(
                'Total Hours: '.now()->format('Y'),
                TaskLog::whereYear('created_at', now()->today()->format('Y'))
                    ->sum('hours')
            ),
            Stat::make(
                'Revenue',
                money(
                    Payment::select('amount', 'currency')
                        ->get()
                        ->map(
                            fn (Payment $payment) => money($payment->amount, 'USD')
                                ->convert(Currency::USD(), 0.018)
                                ->getAmount()
                        )
                        ->sum() * 100,
                    'usd'
                )
            ),
            Stat::make(
                'Revenue: '.now()->format('Y'),
                money(
                    Payment::select('amount', 'currency')
                        ->whereYear('created_at', now()->today()->format('Y'))
                        ->get()
                        ->map(
                            fn (Payment $payment) => money($payment->amount, 'USD')
                                ->convert(Currency::USD(), 0.018)
                                ->getAmount()
                        )
                        ->sum() * 100,
                    'usd'
                )
            ),
        ];
    }
}
